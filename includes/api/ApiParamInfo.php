<?php
/**
 *
 *
 * Created on Dec 01, 2007
 *
 * Copyright © 2008 Roan Kattouw <Firstname>.<Lastname>@gmail.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	// Eclipse helper - will be ignored in production
	require_once( "ApiBase.php" );
}

/**
 * @ingroup API
 */
class ApiParamInfo extends ApiBase {

	public function __construct( $main, $action ) {
		parent::__construct( $main, $action );
	}

	public function execute() {
		// Get parameters
		$params = $this->extractRequestParams();
		$result = $this->getResult();
		$queryObj = new ApiQuery( $this->getMain(), 'query' );
		$r = array();
		if ( is_array( $params['modules'] ) ) {
			$modArr = $this->getMain()->getModules();
			$r['modules'] = array();
			foreach ( $params['modules'] as $m ) {
				if ( !isset( $modArr[$m] ) ) {
					$r['modules'][] = array( 'name' => $m, 'missing' => '' );
					continue;
				}
				$obj = new $modArr[$m]( $this->getMain(), $m );
				$a = $this->getClassInfo( $obj );
				$a['name'] = $m;
				$r['modules'][] = $a;
			}
			$result->setIndexedTagName( $r['modules'], 'module' );
		}
		if ( is_array( $params['querymodules'] ) ) {
			$qmodArr = $queryObj->getModules();
			$r['querymodules'] = array();
			foreach ( $params['querymodules'] as $qm ) {
				if ( !isset( $qmodArr[$qm] ) ) {
					$r['querymodules'][] = array( 'name' => $qm, 'missing' => '' );
					continue;
				}
				$obj = new $qmodArr[$qm]( $this, $qm );
				$a = $this->getClassInfo( $obj );
				$a['name'] = $qm;
				$a['querytype'] = $queryObj->getModuleType( $qm );
				$r['querymodules'][] = $a;
			}
			$result->setIndexedTagName( $r['querymodules'], 'module' );
		}
		if ( $params['mainmodule'] ) {
			$r['mainmodule'] = $this->getClassInfo( $this->getMain() );
		}
		if ( $params['pagesetmodule'] ) {
			$pageSet = new ApiPageSet( $queryObj );
			$r['pagesetmodule'] = $this->getClassInfo( $pageSet );
		}
		$result->addValue( null, $this->getModuleName(), $r );
	}

	/**
	 * @param $obj ApiBase
	 * @return ApiResult
	 */
	function getClassInfo( $obj ) {
		$result = $this->getResult();
		$retval['classname'] = get_class( $obj );
		$retval['description'] = implode( "\n", (array)$obj->getDescription() );
		$retval['examples'] = implode( "\n", (array)$obj->getExamples() );
		$retval['version'] = implode( "\n", (array)$obj->getVersion() );
		$retval['prefix'] = $obj->getModulePrefix();

		if ( $obj->isReadMode() ) {
			$retval['readrights'] = '';
		}
		if ( $obj->isWriteMode() ) {
			$retval['writerights'] = '';
		}
		if ( $obj->mustBePosted() ) {
			$retval['mustbeposted'] = '';
		}
		if ( $obj instanceof ApiQueryGeneratorBase ) {
			$retval['generator'] = '';
		}

		$allowedParams = $obj->getFinalParams();
		if ( !is_array( $allowedParams ) ) {
			return $retval;
		}

		$retval['parameters'] = array();
		$paramDesc = $obj->getFinalParamDescription();
		foreach ( $allowedParams as $n => $p ) {
			$a = array( 'name' => $n );
			if ( isset( $paramDesc[$n] ) ) {
				$a['description'] = implode( "\n", (array)$paramDesc[$n] );
			}

			//handle shorthand
			if( !is_array( $p ) ) {
				$p = array(
					ApiBase::PARAM_DFLT => $p,
				);
			}

			//handle missing type
			if ( !isset( $p[ApiBase::PARAM_TYPE] ) ) {
				$dflt = isset( $p[ApiBase::PARAM_DFLT] ) ? $p[ApiBase::PARAM_DFLT] : null;
				if ( is_bool( $dflt ) ) {
					$p[ApiBase::PARAM_TYPE] = 'bool';
				} elseif ( is_string( $dflt ) || is_null( $dflt ) ) {
					$p[ApiBase::PARAM_TYPE] = 'string';
				} elseif ( is_int( $dflt ) ) {
					$p[ApiBase::PARAM_TYPE] = 'integer';
				}
			}

			if ( isset( $p[ApiBase::PARAM_DEPRECATED] ) && $p[ApiBase::PARAM_DEPRECATED] ) {
				$a['deprecated'] = '';
			}
			if ( isset( $p[ApiBase::PARAM_REQUIRED] ) && $p[ApiBase::PARAM_REQUIRED] ) {
				$a['required'] = '';
			}

			if ( isset( $p[ApiBase::PARAM_DFLT] ) ) {
				$type = $p[ApiBase::PARAM_TYPE];
				if( $type === 'bool' ) {
					$a['default'] = ( $p[ApiBase::PARAM_DFLT] ? 'true' : 'false' );
				} elseif( $type === 'string' ) {
					$a['default'] = strval( $p[ApiBase::PARAM_DFLT] );
				} elseif( $type === 'integer' ) {
					$a['default'] = intval( $p[ApiBase::PARAM_DFLT] );
				} else {
					$a['default'] = $p[ApiBase::PARAM_DFLT];
				}
			}
			if ( isset( $p[ApiBase::PARAM_ISMULTI] ) && $p[ApiBase::PARAM_ISMULTI] ) {
				$a['multi'] = '';
				$a['limit'] = $this->getMain()->canApiHighLimits() ?
					ApiBase::LIMIT_SML2 :
					ApiBase::LIMIT_SML1;
				$a['lowlimit'] = ApiBase::LIMIT_SML1;
				$a['highlimit'] = ApiBase::LIMIT_SML2;
			}

			if ( isset( $p[ApiBase::PARAM_ALLOW_DUPLICATES] ) && $p[ApiBase::PARAM_ALLOW_DUPLICATES] ) {
				$a['allowsduplicates'] = '';
			}

			if ( isset( $p[ApiBase::PARAM_TYPE] ) ) {
				$a['type'] = $p[ApiBase::PARAM_TYPE];
				if ( is_array( $a['type'] ) ) {
					$a['type'] = array_values( $a['type'] ); // to prevent sparse arrays from being serialized to JSON as objects
					$result->setIndexedTagName( $a['type'], 't' );
				}
			}
			if ( isset( $p[ApiBase::PARAM_MAX] ) ) {
				$a['max'] = $p[ApiBase::PARAM_MAX];
			}
			if ( isset( $p[ApiBase::PARAM_MAX2] ) ) {
				$a['highmax'] = $p[ApiBase::PARAM_MAX2];
			}
			if ( isset( $p[ApiBase::PARAM_MIN] ) ) {
				$a['min'] = $p[ApiBase::PARAM_MIN];
			}
			$retval['parameters'][] = $a;
		}
		$result->setIndexedTagName( $retval['parameters'], 'param' );

		// Errors
		$retval['errors'] = $this->parseErrors( $obj->getPossibleErrors() );

		$result->setIndexedTagName( $retval['errors'], 'error' );

		return $retval;
	}

	public function isReadMode() {
		return false;
	}

	public function getAllowedParams() {
		return array(
			'modules' => array(
				ApiBase::PARAM_ISMULTI => true
			),
			'querymodules' => array(
				ApiBase::PARAM_ISMULTI => true
			),
			'mainmodule' => false,
			'pagesetmodule' => false,
		);
	}

	public function getParamDescription() {
		return array(
			'modules' => 'List of module names (value of the action= parameter)',
			'querymodules' => 'List of query module names (value of prop=, meta= or list= parameter)',
			'mainmodule' => 'Get information about the main (top-level) module as well',
			'pagesetmodule' => 'Get information about the pageset module (providing titles= and friends) as well',
		);
	}

	public function getDescription() {
		return 'Obtain information about certain API parameters and errors';
	}

	protected function getExamples() {
		return array(
			'api.php?action=paraminfo&modules=parse&querymodules=allpages|siteinfo'
		);
	}

	public function getVersion() {
		return __CLASS__ . ': $Id$';
	}
}
