<?php

use App\Tools\Country;

/**
 * Flash message to the session
 * 
 * @param string|null $title
 * @param string|null $message 
 * @return App\Tools\Flash 
 */
function flash($title = null, $message = null)
{	
	$flash = app('App\Tools\Flash');
	
	if( func_num_args() == 0) {		
		return $flash;
	}
	
	return $flash->info($title, $message);
}

function country($code)
{
	return Country::name($code);
}