<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * To customize your installation, edit "LocalSettings.php".
 *
 * Note that since all these string interpolations are expanded
 * before LocalSettings is included, if you localize something
 * like $wgScriptPath, you must also localize everything that
 * depends on it.
 *
 * @package MediaWiki
 */

# This is not a valid entry point, perform no further processing unless MEDIAWIKI is defined
if( defined( 'MEDIAWIKI' ) ) {

/**
 * MediaWiki version number
 * @global string $wgVersion
 */
$wgVersion			= '1.5pre-alpha';

/** 
 * Name of the site.
 * It must be changed in LocalSettings.php
 * @global string $wgSitename
 */
$wgSitename         = 'MediaWiki';

/**
 * Will be same as you set @see $wgSitename
 * @global mixed $wgMetaNamespace
 */
$wgMetaNamespace    = FALSE;


/** 
 * URL of the server
 * It will be automaticly build including https mode
 * @global string $wgServer
 */
$wgServer = '';

if( isset( $_SERVER['SERVER_NAME'] ) ) {
	$wgServerName = $_SERVER['SERVER_NAME'];
} elseif( isset( $_SERVER['HOSTNAME'] ) ) {
	$wgServerName = $_SERVER['HOSTNAME'];
} else {
	# FIXME: Fall back on... something else?
	$wgServerName = 'localhost';
}

# check if server use https:
$wgProto = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https' : 'http';

$wgServer = $wgProto.'://' . $wgServerName;
if( isset( $_SERVER['SERVER_PORT'] ) && $_SERVER['SERVER_PORT'] != 80 ) {
	$wgServer .= ":" . $_SERVER['SERVER_PORT'];
}
unset($wgProto);


/**
 * The path we should point to.
 * It might be a virtual path in case with use apache mod_rewrite for example
 * @global string $wgScriptPath
 */
$wgScriptPath	    = '/wiki';

/**
 * Whether to support URLs like index.php/Page_title
 * @global bool $wgUsePathInfo
 */
$wgUsePathInfo		= ( strpos( php_sapi_name(), 'cgi' ) === false );


/**#@+
 * Script users will request to get articles
 * ATTN: Old installations used wiki.phtml and redirect.phtml -
 * make sure that LocalSettings.php is correctly set!
 * @deprecated
 */
/** 
 *	@global string $wgScript
 */
$wgScript           = "{$wgScriptPath}/index.php";
/**
 *	@global string $wgRedirectScript
 */
$wgRedirectScript   = "{$wgScriptPath}/redirect.php";
/**#@-*/


/**#@+
 * @global string
 */
/**
 * style path as seen by users
 * @global string $wgStylePath
 */
$wgStylePath   = "{$wgScriptPath}/skins";
/**
 * filesystem stylesheets directory
 * @global string $wgStyleDirectory
 */
$wgStyleDirectory = "{$IP}/skins";
$wgStyleSheetPath = &$wgStylePath;
$wgStyleSheetDirectory = &$wgStyleDirectory;
$wgArticlePath      = "{$wgScript}?title=$1";
$wgUploadPath       = "{$wgScriptPath}/upload";
$wgUploadDirectory	= "{$IP}/upload";
$wgHashedUploadDirectory	= true;
$wgLogo				= "{$wgUploadPath}/wiki.png";
$wgMathPath         = "{$wgUploadPath}/math";
$wgMathDirectory    = "{$wgUploadDirectory}/math";
$wgTmpDirectory     = "{$wgUploadDirectory}/tmp";
$wgUploadBaseUrl    = "";
/**#@-*/

# If you operate multiple wikis, you can define a shared upload
# path here. Uploads to this wiki will NOT be put there - they
# will be put into $wgUploadDirectory.
#
# If $wgUseSharedUploads is set, the wiki will look in the
# shared repository if no file of the given name is found in
# the local repository (for [[Image:..]], [[Media:..]] links).
# Thumbnails will also be looked for and generated in this
# directory.
#
$wgUseSharedUploads = false;
# Full path on the web server where shared uploads can be found
$wgSharedUploadPath = "http://commons.wikimedia.org/shared/images";
# Path on the file system where shared uploads can be found
$wgSharedUploadDirectory = "/var/www/wiki3/images";
# Set this to false especially if you have a set of files that need to be
# accessible by all wikis, and you do not want to use the hash (path/a/aa/)
# directory layout.
$wgHashedSharedUploadDirectory = true;
# set true if the repository uses latin1 filenames
$wgSharedLatin1=false;
# Base URL for a repository wiki. Leave this blank if uploads are just
# stored in a shared directory and not meant to be accessible through
# a separate wiki. Otherwise the image description pages on the local
# wiki will link to the image description page on this wiki.
#
# Please specify the namespace, as in the example below.
$wgRepositoryBaseUrl="http://commons.wikimedia.org/wiki/Image:";

# Email settings
#
/**
 * Site admin email address
 * Default to wikiadmin@SERVER_NAME
 * @global string $wgEmergencyContact
 */
$wgEmergencyContact = 'wikiadmin@' . $wgServerName;

/**
 * Password reminder email address
 * The address we should use as sender when a user is requesting his password
 * Default to apache@SERVER_NAME
 * @global string $wgPasswordSender
 */
$wgPasswordSender	= 'Wikipedia Mail <apache@' . $wgServerName . '>';

/**
 * dummy address which should be accepted during mail send action
 * It might be necessay to adapt the address or to set it equal
 * to the $wgEmergencyContact address
 */
#$wgNoReplyAddress	= $wgEmergencyContact;
$wgNoReplyAddress	= 'reply@not.possible';

/**
 * Set to true to enable the e-mail basic features:
 * Password reminders, etc. If sending e-mail on your
 * server doesn't work, you might want to disable this.
 * @global bool $wgEnableEmail
 */
$wgEnableEmail = true;

/**
 * Set to true to enable user-to-user e-mail.
 * This can potentially be abused, as it's hard to track.
 * @global bool $wgEnableUserEmail
 */
$wgEnableUserEmail = true;

/**
 * SMTP Mode
 * For using a direct (authenticated) SMTP server connection. 
 * Default to false or fill an array :
 * <code>
 * "host" => 'SMTP domain',
 * "IDHost" => 'domain for MessageID',
 * "port" => "25",
 * "auth" => true/false,
 * "username" => user,
 * "password" => password
 * </code>
 *
 * @global mixed $wgSMTP
 */
$wgSMTP				= false;


/**#@+
 * Database settings
 */
/** database host name or ip address */
$wgDBserver         = 'localhost';
/** name of the database */
$wgDBname           = 'wikidb';
/** */
$wgDBconnection     = '';
/** Database username */
$wgDBuser           = 'wikiuser';
/** Database type
 * "mysql" for working code and "PostgreSQL" for development/broken code
 */
$wgDBtype           = "mysql";
/** Search type
 * "MyISAM" for MySQL native full text search, "Tsearch2" for PostgreSQL
 * based search engine
 */
$wgSearchType	    = "MyISAM";
/** Table name prefix */
$wgDBprefix         = ''; 
/** Database schema
 * on some databases this allows separate 
 * logical namespace for application data
 */
$wgDBschema	    = 'mediawiki';
/**#@-*/



# Shared database for multiple wikis.
# Presently used for storing a user table for single sign-on
# The server for this database must be the same as for the main
# database.
# EXPERIMENTAL
$wgSharedDB = null;

# Database load balancer
# This is a two-dimensional array, an array of server info structures
# Fields are: 
#   host:      Host name
#   dbname:    Default database name
#   user:      DB user
#   password:  DB password
#   type:      "mysql" or "pgsql"
#   load:      ratio of DB_SLAVE load, must be >=0, the sum of all loads must be >0
#   flags:     bit field
#                 DBO_DEFAULT -- turns on DBO_TRX only if !$wgCommandLineMode (recommended)
#                 DBO_DEBUG -- equivalent of $wgDebugDumpSql
#                 DBO_TRX -- wrap entire request in a transaction
#                 DBO_IGNORE -- ignore errors (not useful in LocalSettings.php)
#                 DBO_NOBUFFER -- turn off buffering (not useful in LocalSettings.php)
#
# Leave at false to use the single-server variables above
$wgDBservers		= false; 

# Sysop SQL queries
#   The sql user shouldn't have too many rights other the database, restrict
#   it to SELECT only on 'cur' table for example
#
$wgAllowSysopQueries = false; # Dangerous if not configured properly.
$wgDBsqluser		= 'sqluser';
$wgDBsqlpassword	= 'sqlpass';
$wgDBpassword       = 'userpass';
$wgSqlLogFile           = "{$wgUploadDirectory}/sqllog_mFhyRe6";
$wgDBerrorLog		= false; # File to log MySQL errors to

# wgDBminWordLen :
#  MySQL 3.x : used to discard words that MySQL will not return any results for
#  shorter values configure mysql directly
#  MySQL 4.x : ignore it and configure mySQL
# See: http://dev.mysql.com/doc/mysql/en/Fulltext_Fine-tuning.html
$wgDBminWordLen     = 4;
$wgDBtransactions	= false; # Set to true if using InnoDB tables
$wgDBmysql4			= false; # Set to true to use enhanced fulltext search
$wgSqlTimeout		= 30;

$wgBufferSQLResults     = true; # use buffered queries by default

# Other wikis on this site, can be administered from a single developer account
# Array, interwiki prefix => database name
$wgLocalDatabases   = array();


# Memcached settings
# See docs/memcached.doc
#
$wgMemCachedDebug   = false; # Will be set to false in Setup.php, if the server isn't working
$wgUseMemCached     = false;
$wgMemCachedServers = array( '127.0.0.1:11000' );
$wgMemCachedDebug   = false;
$wgSessionsInMemcached = false;
$wgLinkCacheMemcached = false; # Not fully tested

/**
 * Turck MMCache shared memory
 * You can use this for persistent caching where your wiki runs on a single 
 * server. Enabled by default if Turck is installed. Mutually exclusive with
 * memcached, memcached is used if both are specified.
 *
 * @global bool $wgUseTurckShm Enable or disabled Turck MMCache
 */
$wgUseTurckShm      = false;


# Language settings
#
/**
 * Site language code
 * Default to 'en'. Should be one of ./language/Language(.*).php
 * @global string $wgLanguageCode
 */
$wgLanguageCode     = 'en';

/**
 * Filename of a language file generated by dumpMessages.php
 * @global string|false $wgLanguageFile (default:false)
 */
$wgLanguageFile     = false;
/**
 * Treat language links as magic connectors, not inline links
 * @global bool $wgInterwikiMagic (default:true)
 */
$wgInterwikiMagic	= true;
$wgInputEncoding	= 'ISO-8859-1'; # LanguageUtf8.php normally overrides this
$wgOutputEncoding	= 'ISO-8859-1'; # unless you set the next option to true:
$wgUseLatin1 		= false; # Enable ISO-8859-1 compatibility mode
$wgEditEncoding		= '';

# Set this to eg 'ISO-8859-1' to perform character set
# conversion when loading old revisions not marked with
# "utf-8" flag. Use this when converting wiki to UTF-8
# without the burdensome mass conversion of old text data.
#
# NOTE! This DOES NOT touch any fields other than old_text.
# Titles, comments, user names, etc still must be converted
# en masse in the database before continuing as a UTF-8 wiki.
$wgLegacyEncoding   = false;

$wgMimeType			= 'text/html';
$wgDocType			= '-//W3C//DTD XHTML 1.0 Transitional//EN';
$wgDTD				= 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd';
$wgUseDynamicDates  = false; # Enable to allow rewriting dates in page text
							 # DOES NOT FORMAT CORRECTLY FOR MOST LANGUAGES
$wgAmericanDates    = false; # Enable for English module to print dates
							 # as eg 'May 12' instead of '12 May'
$wgTranslateNumerals = true; # For Hindi and Arabic use local numerals instead
                             # of Western style (0-9) numerals in interface.


# Translation using MediaWiki: namespace
# This will increase load times by 25-60% unless memcached is installed
# Interface messages will be get from the database.
$wgUseDatabaseMessages = true;
$wgMsgCacheExpiry	= 86400;
$wgPartialMessageCache = false;

# Whether to enable language variant conversion. Currently only zh 
# supports this function, to convert between Traditional and Simplified
# Chinese. This flag is meant to isolate the (untested) conversion 
# code, so that if it breaks, only zh will be affected
$wgDisableLangConversion = false;

# Whether to use zhdaemon to perform Chinese text processing
# zhdaemon is under developement, so normally you don't want to
# use it unless for testing
$wgUseZhdaemon = false;
$wgZhdaemonHost="localhost";
$wgZhdaemonPort=2004;

# Miscellaneous configuration settings
#

$wgLocalInterwiki   = 'w';
$wgInterwikiExpiry = 10800; # Expiry time for cache of interwiki table

$wgShowIPinHeader	= true; # For non-logged in users
$wgMaxNameChars     = 32; # Maximum number of bytes in username

$wgExtraSubtitle	= '';
$wgSiteSupportPage	= ''; # A page where you users can receive donations

$wgReadOnlyFile         = "{$wgUploadDirectory}/lock_yBgMBwiR";
$wgUseData = false ;

# The debug log file should be not be publicly accessible if it is
# used, as it may contain private data.
$wgDebugLogFile         = '';

/**#@+
 * @global bool
 */
$wgDebugRedirects		= false;
$wgDebugRawPage         = false; # Avoid overlapping debug entries by leaving out CSS

$wgDebugComments        = false;
$wgReadOnly             = false;
$wgLogQueries           = false;
$wgDebugDumpSql         = false;

# Whether to disable automatic generation of "we're sorry,
# but there has been a database error" pages.
$wgIgnoreSQLErrors      = false;

# Should [[Category:Dog]] on a page associate it with the
# category "Dog"? (a link to that category page will be
# added to the article, clicking it reveals a list of
# all articles in the category)
$wgUseCategoryMagic		= true;

# disable experimental dmoz-like category browsing. Output things like:
# Encyclopedia > Music > Style of Music > Jazz
# FIXME: need fixing
$wgUseCategoryBrowser   = false;

$wgEnablePersistentLC	= false;	# Obsolete, do not use
$wgCompressedPersistentLC = true; # use gzcompressed blobs
$wgUseOldExistenceCheck = false;  # use old prefill link method, for debugging only

/**
 * Keep parsed pages in a cache (objectcache table, turck, or memcached)
 * to speed up output of the same page viewed by another user with the
 * same options.
 *
 * This can provide a significant speedup for medium to large pages,
 * so you probably want to keep it on.
 */
$wgEnableParserCache = true;

/**#@-*/

# wgHitcounterUpdateFreq sets how often page counters should be
# updated, higher values are easier on the database. A value of 1
# causes the counters to be updated on every hit, any higher value n
# cause them to update *on average* every n hits. Should be set to
# either 1 or something largish, eg 1000, for maximum efficiency.

$wgHitcounterUpdateFreq = 1;

# User rights
#   It's not 100% safe, there could be security hole using that one. Use at your
# own risks.

$wgWhitelistEdit = false;   # true = user must login to edit.
$wgWhitelistRead = false;	# Pages anonymous user may see, like: = array ( ":Main_Page", "Special:Userlogin", "Wikipedia:Help");
$wgWhitelistAccount = array ( 'user' => 1, 'sysop' => 1, 'developer' => 1 );

$wgAllowAnonymousMinor = false; # Allow anonymous users to mark changes as 'minor'

$wgSysopUserBans        = false; # Allow sysops to ban logged-in users
$wgSysopRangeBans		= false; # Allow sysops to ban IP ranges
$wgDefaultBlockExpiry	= '24 hours'; # default expiry time
                                # strtotime format, or "infinite" for an infinite block
$wgAutoblockExpiry		= 86400; # Number of seconds before autoblock entries expire

# Proxy scanner settings
# If you enable this, every editor's IP address will be scanned for open
# HTTP proxies.
#
# Don't enable this. Many sysops will report "hostile TCP port scans" to
# your ISP and ask for your server to be shut down. 
#
# You have been warned.
#
$wgBlockOpenProxies = false; # Automatic open proxy test on edit
$wgProxyPorts = array( 80, 81, 1080, 3128, 6588, 8000, 8080, 8888, 65506 );
$wgProxyScriptPath = "$IP/proxy_check.php";
$wgProxyMemcExpiry = 86400;
$wgProxyKey = 'W1svekXc5u6lZllTZOwnzEk1nbs';
$wgProxyList = array();  # big list of banned IP addresses, in the keys not the values

# Number of accounts each IP address may create, 0 to disable.
# Requires memcached
$wgAccountCreationThrottle = 0;


# Client-side caching:
$wgCachePages       = true; # Allow client-side caching of pages

# Set this to current time to invalidate all prior cached pages.
# Affects both client- and server-side caching.
$wgCacheEpoch = '20030516000000';


# Server-side caching:
#  This will cache static pages for non-logged-in users
#  to reduce database traffic on public sites.
#  Must set $wgShowIPinHeader = false
$wgUseFileCache = false;
$wgFileCacheDirectory = "{$wgUploadDirectory}/cache";

# When using the file cache, we can store the cached HTML gzipped to save disk
# space. Pages will then also be served compressed to clients that support it.
# THIS IS NOT COMPATIBLE with ob_gzhandler which is now enabled if supported in
# the default LocalSettings.php! If you enable this, remove that setting first.
#
# Requires zlib support enabled in PHP.
$wgUseGzip = false;

/*	T. Gries Aug.-Nov.2004

	THESE ARE MY SUGGESTED FIRST TEST global admin options FOR ENOTIF.
	Attention: the defaults might differ from standard media wiki distributions.

	However, I suggest to start with these which allow to evaluate almost all new features quickly.
	user preferences default options SEE AS USUAL /languages/Language.php
*/

########################### CAUTION ################# ATTENTION ###############################################
#
# T. Gries Aug.-Dec. 2004
#
# SECTION FOR DEVELOPERS and SERVER ADMINS
#
# HERE COME TWO OPTIONS, WHICH ALLOW ACOUSTIC SIGNALS on the server beeper WHEN AN EMAIL IS ACTUALLY SENT OUT.
# YOU MIGHT WISH TO ENABLE THESE, BUT BE CAREFUL, AS A system() CALL IS PERFORMED using the shown parameters.
# I FIND IT VERY USEFUL, but this is a very personal comment. T. Gries
#
# The system speaker beeps when the wiki actually sends out a notification mail (safe default = disabled).
#
# The following string is passed as parameter to a system() call in UserMailer.php
# The system() calls call - in the shown example - the beep 1.2.2 program (LINUX) with frequency f [Hz] and length l [msec]
#
# Beep 1.2.2 can be found on http://freshmeat.net/projects/beep/ and I like it.
#
########################### SAFE #################### SAFE #####################################################
$wgEmailNotificationSystembeep	= ''; # empty string disables this feature; this appears to be safe
######ENTER#AT#YOUR#OWN#RISK###CAUTION###### ATTENTION ###################################################
#$wgEmailNotificationSystembeep	= '/usr/bin/beep -f 4000 -l 20 &';	# a system() call with exactly this string as parameter is executed when such a mail is sent
########################### CAUTION ################# ATTENTION ###############################################

# For email notification on page changes T.Gries/M.Arndt 01.11.2004
$wgPasswordSender				= $wgEmergencyContact;
$wgEmailNotificationMailsSentFromPageEditor	= false; # false: Enotif mails appear to come from $wgEmergencyContact
#							 # true: from PageEditor if s/he opted-in

# If set to true, users get a corresponding option in their preferences and can choose to enable or disable at their discretion
# If set to false, the corresponding input form on the user preference page is suppressed
# It call this to be a "user-preferences-option (UPO)"
$wgEmailAuthentication				= true; # UPO (if this is set to false, texts referring to authentication are suppressed)
$wgEmailNotificationForWatchlistPages		= false; # UPO
$wgEmailNotificationForUserTalkPages		= false;	# UPO
$wgEmailNotificationRevealPageEditorAddress	= false;	# UPO; reply-to address may be filled with page editor's address (if user allowed this in the preferences)
$wgEmailNotificationForMinorEdits		= true;	# UPO; false: "minor edits" on pages do not trigger notification mails.
#							# Attention: _every_ change on a user_talk page trigger a notification mail (if the user is not yet notified)

# Show watching users in recent changes, watchlist and page history views
$wgRCShowWatchingUsers 				= false; # UPO
# Show watching users in Page views
$wgPageShowWatchingUsers 			= false;
# Show "Updated (since my last visit)" marker in RC view, watchlist and history view for watched pages with new changes
$wgShowUpdatedMarker 				= true; # UPO

$wgCookieExpiration = 2592000;

# Squid-related settings
#

# Enable/disable Squid
 $wgUseSquid = false;
 
# If you run Squid3 with ESI support, enable this (default:false):
 $wgUseESI = false;
 
# Internal server name as known to Squid, if different
# $wgInternalServer = 'http://yourinternal.tld:8000';
 $wgInternalServer = $wgServer;
 
# Cache timeout for the squid, will be sent as s-maxage (without ESI) or 
# Surrogate-Control (with ESI). Without ESI, you should strip out s-maxage in the Squid config.
# 18000 seconds = 5 hours, more cache hits with 2678400 = 31 days
 $wgSquidMaxage = 18000;
 
# A list of proxy servers (ips if possible) to purge on changes
# don't specify ports here (80 is default)
# $wgSquidServers = array('127.0.0.1');

# Maximum number of titles to purge in any one client operation
$wgMaxSquidPurgeTitles = 400;


# Cookie settings:
#   Set to set an explicit domain on the login cookies
#   eg, "justthis.domain.org" or ".any.subdomain.net"
$wgCookieDomain = '';
$wgCookiePath = '/';
$wgDisableCookieCheck = false;

# Whether to allow inline image pointing to other websites
$wgAllowExternalImages = true;

$wgMiserMode = false; # Disable database-intensive features
$wgDisableQueryPages = false; # Disable all query pages if miser mode is on, not just some
$wgUseWatchlistCache = false; # Generate a watchlist once every hour or so
$wgWLCacheTimeout = 3600;     # The hour or so mentioned above

# To use inline TeX, you need to compile 'texvc' (in the 'math' subdirectory
# of the MediaWiki package and have latex, dvips, gs (ghostscript), and
# convert (ImageMagick) installed and available in the PATH.
# Please see math/README for more information.
$wgUseTeX = false;
$wgTexvc = './math/texvc'; # Location of the texvc binary

# Profiling / debugging
$wgProfiling = false; # Enable for more detailed by-function times in debug log
$wgProfileLimit = 0.0; # Only record profiling info for pages that took longer than this
$wgProfileOnly = false; # Don't put non-profiling info into log file
$wgProfileToDatabase = false; # Log sums from profiling into "profiling" table in db.
$wgProfileSampleRate = 1; # Only profile every n requests when profiling is turned on
$wgDebugProfiling = false; # Detects non-matching wfProfileIn/wfProfileOut calls
$wgDebugFunctionEntry = 0; # Output debug message on every wfProfileIn/wfProfileOut
$wgDebugSquid = false; # Lots of debugging output from SquidUpdate.php

$wgDisableCounters = false;
$wgDisableTextSearch = false;
$wgDisableSearchUpdate = false; # If you've disabled search semi-permanently, this also disables updates to the table. If you ever re-enable, be sure to rebuild the search table.
$wgDisableUploads = true; # Uploads have to be specially set up to be secure
$wgRemoteUploads = false; # Set to true to enable the upload _link_ while local uploads are disabled. Assumes that the special page link will be bounced to another server where uploads do work.
$wgDisableAnonTalk = false;

# Path to the GNU diff3 utility. If the file doesn't exist,
# edit conflicts will fall back to the old behaviour (no merging).
$wgDiff3 = '/usr/bin/diff3';


# We can also compress text in the old revisions table. If this is set on,
# old revisions will be compressed on page save if zlib support is available.
# Any compressed revisions will be decompressed on load regardless of this
# setting *but will not be readable at all* if zlib support is not available.
$wgCompressRevisions = false;

# This is the list of preferred extensions for uploading files. Uploading
# files with extensions not in this list will trigger a warning.
$wgFileExtensions = array( 'png', 'gif', 'jpg', 'jpeg', 'ogg' );

# Files with these extensions will never be allowed as uploads.
$wgFileBlacklist = array(
	# HTML may contain cookie-stealing JavaScript and web bugs
	'html', 'htm',
	# PHP scripts may execute arbitrary code on the server
	'php', 'phtml', 'php3', 'php4', 'phps',
	# Other types that may be interpreted by some servers
	'shtml', 'jhtml', 'pl', 'py', 'cgi',
	# May contain harmful executables for Windows victims
	'exe', 'scr', 'dll', 'msi', 'vbs', 'bat', 'com', 'pif', 'cmd', 'vxd', 'cpl' );

# This is a flag to determine whether or not to check file extensions on
# upload.
$wgCheckFileExtensions = true;

# If this is turned off, users may override the warning for files not
# covered by $wgFileExtensions.
$wgStrictFileExtensions = true;

# Warn if uploaded files are larger than this
$wgUploadSizeWarning = 150000;

$wgPasswordSalt = true; # For compatibility with old installations set to false

# Which namespaces should support subpages?
# See Language.php for a list of namespaces.
#
$wgNamespacesWithSubpages = array( -1 => 0, 0 => 0, 1 => 1,
  2 => 1, 3 => 1, 4 => 0, 5 => 1, 6 => 0, 7 => 1, 8 => 0, 9 => 1, 10 => 0, 11 => 1);

$wgNamespacesToBeSearchedDefault = array( -1 => 0, 0 => 1, 1 => 0,
  2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0, 8 => 0, 9 => 1, 10 => 0, 11 => 1 );

# If set, a bold ugly notice will show up at the top of every page.
$wgSiteNotice = "";

## Set $wgUseImageResize to true if you want to enable dynamic
## server side image resizing ("Thumbnails")
# 
$wgUseImageResize		= false;

## Resizing can be done using PHP's internal image libraries
## or using ImageMagick. The later supports more file formats
## than PHP, which only supports PNG, GIF, JPG, XBM and WBMP.
##
## Set $wgUseImageMagick to true to use Image Magick instead
## of the builtin functions
#
$wgUseImageMagick		= false;
$wgImageMagickConvertCommand    = '/usr/bin/convert';

# Scalable Vector Graphics (SVG) may be uploaded as images.
# Since SVG support is not yet standard in browsers, it is
# necessary to rasterize SVGs to PNG as a fallback format.
#
# An external program is required to perform this conversion:
$wgSVGConverters = array(
	'ImageMagick' => '$path/convert -background white -geometry $width $input $output',
	'sodipodi' => '$path/sodipodi -z -w $width -f $input -e $output',
	'inkscape' => '$path/inkscape -z -w $width -f $input -e $output',
	'batik' => 'java -Djava.awt.headless=true -jar $path/batik-rasterizer.jar -w $width -d $output $input',
	);
$wgSVGConverter = 'ImageMagick'; # Pick one of the above
$wgSVGConverterPath = ''; # If not in the executable PATH, specify

if( !isset( $wgCommandLineMode ) ) {
	$wgCommandLineMode = false;
}

# Show seconds in Recent Changes
$wgRCSeconds = false;

# Log IP addresses in the recentchanges table
$wgPutIPinRC = false;

# RDF metadata toggles
$wgEnableDublinCoreRdf = false;
$wgEnableCreativeCommonsRdf = false;

# Override for copyright metadata.
# TODO: these options need documentation
$wgRightsPage = NULL;
$wgRightsUrl = NULL;
$wgRightsText = NULL;
$wgRightsIcon = NULL;

# Set this to some HTML to override the rights icon with an arbitrary logo
$wgCopyrightIcon = NULL;

# Set this to true if you want detailed copyright information forms on Upload.
$wgUseCopyrightUpload = false;

# Set this to false if you want to disable checking that detailed 
# copyright information values are not empty.
$wgCheckCopyrightUpload = true;


# Set this to false to avoid forcing the first letter of links
# to capitals. WARNING: may break links! This makes links
# COMPLETELY case-sensitive. Links appearing with a capital at
# the beginning of a sentence will *not* go to the same place
# as links in the middle of a sentence using a lowercase initial.
$wgCapitalLinks = true;

# List of interwiki prefixes for wikis we'll accept as sources
# for Special:Import (for sysops). Since complete page history
# can be imported, these should be 'trusted'.
$wgImportSources = array();

# Set this to the number of authors that you want to be credited below an
# article text. Set it to zero to hide the attribution block, and a
# negative number (like -1) to show all authors. Note that this will
# require 2-3 extra database hits, which can have a not insignificant
# impact on performance for large wikis.
$wgMaxCredits = 0;

# If there are more than $wgMaxCredits authors, show $wgMaxCredits of them.
# Otherwise, link to a separate credits page.
$wgShowCreditsIfMax = true;

# Text matching this regular expression will be recognised as spam
# See http://en.wikipedia.org/wiki/Regular_expression
$wgSpamRegex = false; 
# Similarly if this function returns true
$wgFilterCallback = false;

# Go button goes straight to the edit screen if the article doesn't exist
$wgGoToEdit = false;

# Allow limited user-specified HTML in wiki pages?
# It will be run through a whitelist for security.
# Set this to false if you want wiki pages to consist only of wiki
# markup. Note that replacements do not yet exist for all HTML
# constructs.
$wgUserHtml = true;

# Allow raw, unchecked HTML in <html>...</html> sections.
# THIS IS VERY DANGEROUS on a publically editable site, so
# you can't enable it unless you've restricted editing to
# trusted users only with $wgWhitelistEdit.
$wgRawHtml = false;

# $wgUseTidy: use tidy to make sure HTML output is sane.
# This should only be enabled if $wgUserHtml is true.
# tidy is a free tool that fixes broken HTML. 
# See http://www.w3.org/People/Raggett/tidy/
# $wgTidyBin should be set to the path of the binary and 
# $wgTidyConf to the path of the configuration file.
# $wgTidyOpts can include any number of parameters.
$wgUseTidy = false;
$wgTidyBin = 'tidy';
$wgTidyConf = $IP.'/extensions/tidy/tidy.conf'; 
$wgTidyOpts = '';

# See list of skins and their symbolic names in languagel/Language.php
$wgDefaultSkin = 'monobook';

# Settings added to this array will override the language globals for
# the user preferences used by anonymous visitors and newly created
# accounts. (See names and sample values in languages/Language.php)
#
# For instance, to disable section editing links:
#   $wgDefaultUserOptions['editsection'] = 0;
#
$wgDefaultUserOptions = array();

# Whether or not to allow real name fields. Defaults to true.
# If set to false, the corresponding input forms on the log-in page and on the user preference page is suppressed.
$wgAllowRealName = true;

# Use XML parser?
$wgUseXMLparser = false ;

# Extensions
$wgSkinExtensionFunctions = array();
$wgExtensionFunctions = array();

# Allow user Javascript page?
$wgAllowUserJs = true;

# Allow user Cascading Style Sheets (CSS)?
$wgAllowUserCss = true;

# Use the site's Javascript page?
$wgUseSiteJs = true;

# Use the site's Cascading Style Sheets (CSS)?
$wgUseSiteCss = true;
	
# Filter for Special:Randompage. Part of a WHERE clause
$wgExtraRandompageSQL = false;

# Allow the "info" action, very inefficient at the moment
$wgAllowPageInfo = false;

# Maximum indent level of toc.
$wgMaxTocLevel = 999;

# Recognise longitude/latitude coordinates
$wgUseGeoMode = false;

# Validation for print or other production versions
$wgUseValidation = false;

# Use external C++ diff engine (module wikidiff from the
# extensions package)
$wgUseExternalDiffEngine = false;

# Use RC Patrolling to check for vandalism
$wgUseRCPatrol = true;

# Set maximum number of results to return in syndication feeds
# (RSS, Atom) for eg Recentchanges, Newpages.
$wgFeedLimit = 50;

# _Minimum_ timeout for cached Recentchanges feed, in seconds.
# A cached version will continue to be served out even if changes
# are made, until this many seconds runs out since the last render.
$wgFeedCacheTimeout = 60;

# When generating Recentchanges RSS/Atom feed, diffs will not be
# generated for pages larger than this size.
$wgFeedDiffCutoff = 32768;


# Additional namespaces. If the namespaces defined in Language.php and Namespace.php are insufficient,
# you can create new ones here, for example, to import Help files in other languages.
# PLEASE NOTE: Once you delete a namespace, the pages in that namespace will no longer be accessible.
# If you rename it, then you can access them through the new namespace name.
#
# Custom namespaces should start at 100 and stop at 255 (hard limit set by database)
#$wgExtraNamespaces =
#	array(100 => "Hilfe",
#	      101 => "Hilfe_Diskussion",
#	      102 => "Aide",
#	      103 => "Discussion_Aide"
#	      );
$wgExtraNamespaces = NULL;

# Enable SOAP interface. Off by default
# SOAP is a protocoll for remote procedure calls (RPC) using http as middleware.
# This interface can be used by bots or special clients to receive articles from
# a wiki.
# Most bots use the normal HTTP interface and don't use SOAP.
# If unsure, set to false.
$wgEnableSOAP = false;

# Limit images on image description pages to a user-selectable limit. In order to
# reduce disk usage, limits can only be selected from a list. This is the list of
# settings the user can choose from:
$wgImageLimits = array (
	array(320,240),
	array(640,480),
	array(800,600),
	array(1024,768),
	array(1280,1024),
	array(10000,10000) );


/** Navigation links for the user sidebar.
 * 'text' is the name of the MediaWiki message that contains the label of this link
 * 'href' is the name of the MediaWiki message that contains the link target of this link.
 *        Link targets starting with http are considered remote links. Ones not starting with
 *        http are considered as names of local wiki pages.
 */
$wgNavigationLinks = array (
	array( 'text'=>'mainpage',	'href'=>'mainpage' ),
	array( 'text'=>'portal',	'href'=>'portal-url' ),
	array( 'text'=>'currentevents', 'href'=>'currentevents-url' ),
	array( 'text'=>'recentchanges', 'href'=>'recentchanges-url' ),
	array( 'text'=>'randompage',	'href'=>'randompage-url' ),
	array( 'text'=>'help', 		'href'=>'helppage' ),
	array( 'text'=>'sitesupport',	'href'=>'sitesupport-url' ),
);

# On category pages, show thumbnail gallery for images belonging to that category
# instead of listing them as articles.
$wgCategoryMagicGallery = true;

# Browser Blacklist for unicode non compliant browsers
# Contains a list of regexps : "/regexp/"  matching problematic browsers
$wgBrowserBlackList = array(
	"/Mozilla\/4\.78 \[en\] \(X11; U; Linux/"
	// FIXME: Add some accurate, true things here
	);

# Fake out the timezone that the server thinks it's in. This will be used
# for date display and not for what's stored in the DB.
# Leave to null to retain your server's OS-based timezone value
# This is the same as the timezone
# $wgLocaltimezone = 'GMT';
# $wgLocaltimezone = 'PST8PDT';
# $wgLocaltimezone = 'Europe/Sweden';
# $wgLocaltimezone = 'CET';
$wgLocaltimezone = null;

# User level management
# The number is the database id of a group you want users to be attached by
# default. A better interface should be coded [av]
$wgAnonGroupId = 1;
$wgLoggedInGroupId = 2;
$wgSysopGroupId = 3;
$wgBureaucratGroupId = 4;

/*
When translating messages with wfMsg(), it is not always clear what should
be considered UI messages and what shoud be content messages. 

For example, for regular wikipedia site like en, there should be only one 
'mainpage', therefore when getting the link of 'mainpage', we should 
treate it as content of the site and call wfMsgForContent(), while for 
rendering the text of the link, we call wfMsg(). The code in default
behaves this way. However, sites like common do offer different versions 
of 'mainpage' and the like for different languages. This array provides a
way to override the default behavior. For example, to allow language specific
mainpage and community portal, set

$wgForceUIMsgAsContentMsg = array( 'mainpage', 'portal-url' );

*/
$wgForceUIMsgAsContentMsg = array();


/**
 * Authentication plugin.
 */
$wgAuth = null;

/**
 * Global list of hooks.
 * Add a hook by doing:
 *     $wgHooks['event_name'][] = $function;
 * or:
 *     $wgHooks['event_name'][] = array($function, $data);
 * or:
 *     $wgHooks['event_name'][] = array($object, 'method');
 */
	
$wgHooks = array();

/**
 * Experimental preview feature to fetch rendered text
 * over an XMLHttpRequest from JavaScript instead of
 * forcing a submit and reload of the whole page.
 * Leave disabled unless you're testing it.
 */
$wgLivePreview = false;

/**
 * Disable the internal MySQL-based search, to allow it to be
 * implemented by an extension instead.
 */
$wgDisableInternalSearch = false;

} else {
	die();
}
?>
