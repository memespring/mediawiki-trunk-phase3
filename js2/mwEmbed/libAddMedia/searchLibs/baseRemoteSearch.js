/*
* Base remote search Object. 
* provies the base class for the other search system to extend. 
*/
loadGM( {
	"mwe-imported_from" : "$1 imported from [$2 $3]. See the original [$4 resource page] for more information."
} )

/*
* rsd_default_rss_item_mapping
* 
*  @key is name of rObj variable
*  @value is where to find the value in the item xml
* 
*  *value format:*
*  . indicates multiple tags 
*  @ separates the tag from attribute list
*  {.}tag_name@{attribute1|attribute2}
*
* Also see mapAttributeToResource function bellow 
*
* FIXME should switch this over to something like Xpath if we end up parsing a lot of rss formats
*/
var rsd_default_rss_item_mapping = {
	'poster'	: 'media:thumbnail@url',
	'roe_url'	: 'media:roe_embed@url',
	'person'	: 'media:person@label|url',
	'parent_clip':'media:parent_clip@url',
	'bill'		: 'media:bill@label|url',
	'title'		: 'title',
	'link'		: 'link',
	'desc'		: 'description',
	// multiple items
	'category'  : '.media:category@label|url'
}

var baseRemoteSearch = function( iObj ) {
	return this.init( iObj );
};
baseRemoteSearch.prototype = {

	completed_req:0,
	num_req:0,
	
	// ResultsObj holds the array of results
	resultsObj: { },

	// Default search result values for paging:
	offset			 :0,
	limit			: 30,
	more_results	: false,
	num_results		: 0,

	/**
	* Initialise the baseRemoteSearch 
	*/
	init: function( options ) {
		js_log( 'mvBaseRemoteSearch:init' );
		for ( var i in options ) {
			this[i] = options[i];
		}
		return this;
	},
	getSearchResults:function() {
		// Empty out the current results before issuing a request
		this.resultsObj = { };
		
		// Do global getSearchResults bindings
		this.last_query = $j( '#rsd_q' ).val();
		this.last_offset = this.cp.offset;
		
		// Set the loading flag:		
		this.loading = true;
	},
	/*
	* Parses and adds video rss based input format
	* @param {XML Nodes} data the data to be parsed
	* @param {String} provider_url the source url (used to generate absolute links)
	*/
	addRSSData:function( data , provider_url ) {
		js_log( 'f:addRSSData' );
		var _this = this;
		var http_host = '';
		var http_path = '';
		if ( provider_url ) {
			pUrl =  mw.parseUri( provider_url );
			http_host = pUrl.protocol + '://' + pUrl.authority;
			http_path = pUrl.directory;
		}
		var items = data.getElementsByTagName( 'item' );
		// js_log('found ' + items.length );
		$j.each( items, function( inx, item ) {		
			var rObj = { };
			for ( var attr in rsd_default_rss_item_mapping ) {				
				_this.mapAttributeToResource( rObj, item, attr );
			}
			// make relative urls absolute:
			var url_param = new Array( 'src', 'poster' );
			for ( var j = 0; j < url_param.length; j++ ) {
				var p = url_param[j];
				if ( typeof rObj[p] != 'undefined' ) {
					if ( rObj[p].substr( 0, 1 ) == '/' ) {
						rObj[p] = http_host + rObj[p];
					}
					if ( mw.parseUri( rObj[i] ).host ==  rObj[p] ) {
						rObj[p] = http_host + http_path + rObj[p];
					}
				}
			}
			// force a mime type for now.. in the future generalize for other RSS feeds and conversions
			rObj['mime'] = 'video/ogg';
			// add pointer to parent search obj:( this.cp.limit )? this.cp.limit : this.limit,

			rObj['pSobj'] = _this;
			// add the result to the result set:
			_this.resultsObj[ inx ] = rObj;
			_this.num_results++;
		} );
	},
	/*
	* Maps a given attribute to a resource object per mapping defined in 
	* rsd_default_rss_item_mapping
	*
	* @param {Object} rObj the resource object
	* @param {XML Node} the xml result node
	* @param {attr} the name attribute we are maping to the resource object 
	*/
	mapAttributeToResource: function( rObj, item, attr ){		
		var selector = rsd_default_rss_item_mapping[ attr ].split( '@' );
		var flag_multiple = (  selector[0].substr( 0, 1 ) == '.' ) ? true : false;
		if ( flag_multiple ) {
			rObj[ attr ] = new Array();
			var tag_name = selector[0].substr( 1 );
		} else {
			var tag_name = selector[0];
		}

		var attr_name = null;
		if ( typeof selector[1] != 'undefined' ) {
			attr_name = selector[1];
			if ( attr_name.indexOf( '|' ) != -1 )
				attr_name = attr_name.split( '|' );
		}

		$j.each( item.getElementsByTagName( tag_name ), function ( inx, node ) {
			var tag_val = '';
			if ( node != null && attr_name == null ) {
				if ( node.childNodes[0] != null ) {
					// trim and strip html:
					tag_val = $j.trim( node.firstChild.nodeValue ).replace(/(<([^>]+)>)/ig,"");
				}
			}
			if ( node != null && attr_name != null ) {
				if ( typeof attr_name == 'string' ) {
					tag_val = $j.trim( $j( node ).attr( attr_name ) );
				} else {
					var attr_vals = { };
					for ( var j in attr_name ) {
						if ( $j( node ).attr( attr_name[j] ).length != 0 )
							attr_vals[ attr_name[j] ] = $j.trim( $j(node).attr( attr_name[j]) ).replace(/(<([^>]+)>)/ig,"");
					}
					tag_val = attr_vals ;
				}
			}
			if ( flag_multiple ) {
				rObj[ attr ].push( tag_val )
			} else {
				rObj[ attr ] = tag_val;
			}
		} );
		// Nothing to return we update the "rObj" directly
	}, 
	
	/**
	* Get the html representation of the resource Object paramater
	*/
	getEmbedHTML: function( rObj , options ) {
		if ( !options )
			options = { };
		// Set up the output var with the default values: 
		var eWidth = rObj.width;
		var eHeight = rObj.height;
		if ( options['max_height'] ) {
			eHeight = ( options.max_height > rObj.height ) ? rObj.height : options.max_height;
			eWidth = ( rObj.width / rObj.height ) * outOpt.height;
		}
		var style_attr = 'style="';
		if( eWidth )
			style_attr += 'width:' + eWidth + 'px;';
			
		if( eHeight )
			style_attr += 'height:' + eHeight + 'px;';			
		
		var id_attr = ( options['id'] ) ? ' id = "' + options['id'] + '" ': '';
		
		if ( rObj.mime.indexOf( 'image' ) != -1 )
			return this.getImageEmbedHTML( rObj, options );
			
		if ( rObj.mime == 'application/ogg' || rObj.mime == 'video/ogg' || rObj.mime == 'audio/ogg' ) {
			var ahtml = id_attr +
					' src="' + rObj.src + '" ' +
					style_attr +
					' poster="' +  rObj.poster + '" ';
			if (  rObj.mime == 'application/ogg' || rObj.mime == 'video/ogg'  ) {
				return '<video ' + ahtml + '></video>';
			}
					
			if ( rObj.mime.indexOf( 'audio/ogg' ) != -1 ) {
				return '<audio ' + ahtml + '></audio>';
			}
		}
		js_log( "ERROR:: no embed code for mime type: " + rObj.mime );	
		return 'Error missing embed code for: ' + escape( rObj.mime );
	},
	/**
	* Get the embed html specificaly for an image type resource Object. 
	*/
	getImageEmbedHTML:function( rObj, options ) {
		// if crop is null do base output: 
		var imgHtml = '<img ' + options.id_attr + ' src="' + rObj.edit_url  + '"' + options.style_attr + ' ></img>';
		if ( rObj.crop == null )
			return imgHtml
		// else do crop output:	
			return '<div style="width:' + rObj.crop.w + 'px;height: ' + rObj.crop.h + 'px;overflow:hidden;position:relative">' +
						'<div style="position:relative;top:-' + rObj.crop.y + 'px;left:-' + rObj.crop.x + 'px">' +
							imgHtml +
						'</div>' +
					'</div>';
	},
	/**
	* Gets an image object from a requested transformation via callback
	* ( letting api search implementations query the remote server for a 
	*  given transformation )  
	* 
	* By default just return the existing image.
	*/
	getImageObj:function( rObj, size, callback ) {
		callback( { 
			'url' : rObj.poster 
		} );
	},
	/*
	* Gets the inline wikiText description of the resource Object
	* By default just return the rObj description value 
	*/
	getInlineDescWiki:function( rObj ) {
		// return striped html  & trim white space
		if ( rObj.desc )
			return $j.trim( rObj.desc.replace(/(<([^>]+)>)/ig,"") );
		// no desc avaliable:
		return '';
	},
	/**
	* Get the licence wikiText tag for a given resource Object.
	*
	* By default license permission wiki text is cc based template mapping 
	* (does not confirm the templates actually exist)
	*/
	getPermissionWikiTag: function( rObj ) {
		if ( !rObj.license )
			return '';// no license info
			
		// First check if we have a special license template tag already set: 
		if( rObj.license_template_tag )
			return '{{' + rObj.license_template_tag + '}}';
			
		// Check that its a defined creative commons license key:
		if (  this.rsd.licenses.cc.licenses[ rObj.license.key ] != 'undefined' ) {
			return '{{Cc-' + rObj.license.key + '}}';
		} else if ( rObj.license.lurl ) {
			return '{{Template:External_License|' + rObj.license.lurl + '}}';
		}

	},
	/**
	* Gets the resource import description text
	*/
	getImportResourceDescWiki:function( rObj ) {
		return gM( 'mwe-imported_from', [rObj.title,  this.cp.homepage, gM('rsd-' + this.cp.id + '-title'), rObj.link] );
	},
	/**
	* Get any extra wikitext description for the given resource object. 
	* For content outside of the main template description, 
	* like categories or additional wikitext notes. 
	*
	* By default its an empty string. 
	*/
	getExtraResourceDescWiki:function( rObj ) {
		return '';
	},
	
	/** 
	* Gets a image transformation 
	* by default it just return the poster
	*/
	getImageTransform:function( rObj, opt ) {
		return rObj.poster;
	},
	
	/**
	* Adds additional resource information post clip embedding. 
	*/
	addResourceInfoFromEmbedInstance : function( rObj, eb_id ) {
		return rObj;
	},
	
	/**
	* Adds resource info with a callback function
	*
	* Usefull for grabbing extra info that is not avaliable in the innitial
	* search results api request.
	*/
	addResourceInfoCallback:function( rObj, callback ) {
		callback();
	},
	
	/**
	* Get the wiki embed code for a given resource object
	*/
	getEmbedWikiCode:function( rObj ) {
		var layout = ( rObj.layout ) ? rObj.layout:"right"
		var o = '[[' + this.rsd.cFileNS + ':' + rObj.target_resource_title + '|thumb|' + layout;

		if ( !rObj.target_width && rObj.width ) {
			rObj.target_width = ( rObj.width < 640 ) ? rObj.width: '640';
		}

		if ( rObj.target_width )
			o += '|' + rObj.target_width + 'px';

		if ( rObj.inlineDesc )
			o += '|' + rObj.inlineDesc;

		o += ']]';
		return o;
	},
	/**
	* Updates / normalizes the target_resource_title
	*/
	updateTargetResourceTitle:function( rObj ) {
		rObj.target_resource_title = rObj.titleKey.replace( / File: | Image: / , '' );
		rObj.target_resource_title = this.cp.resource_prefix + rObj.target_resource_title;
	}
}
