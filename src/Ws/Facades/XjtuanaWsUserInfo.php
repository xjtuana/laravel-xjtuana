<?php 

namespace Xjtuana\Cas\Facades;

use Illuminate\Support\Facades\Facade;

class XjtuanaWsUserInfo extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { 
	    return 'xjtuana.ws.userinfo'; 
	}

}