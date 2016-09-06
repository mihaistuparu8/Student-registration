<?php
/**
 * Routes - all standard routes are defined here.
 *
 * @author David Carr - dave@daveismyname.com
 * @version 2.2
 * @date updated Sept 19, 2015
 */

/** Create alias for Router. */
use Core\Router;
use Helpers\Hooks;


/** Define routes. */
Router::any('', 'Controllers\Welcome@index');
Router::any('subpage', 'Controllers\Welcome@subPage');

/* Home index routes*/

Router::get('home', 'Controllers\Login@home_index');
Router::get('faculties', 'Controllers\Login@faculties_index');
Router::get('accommodation', 'Controllers\Login@accommodation_index');
Router::get('social', 'Controllers\Login@social_index');

/* Login routes*/

Router::get('login', 'Controllers\Login@login_index'); 
Router::get('application', 'Controllers\Login@application_index');

/* Logged routes*/
Router::get('logged', 'Controllers\Login@logged_index');
Router::get('accommodationLogged', 'Controllers\Login@logged_accom_index');
Router::get('forum', 'Controllers\Login@forum_index');
Router::get('profile', 'Controllers\Login@profile_index');
Router::get('account', 'Controllers\Login@account_index');
Router::get('logout', 'Controllers\Login@logout'); 

/*Other routes*/
Router::post('login', 'Controllers\Login@login');
Router::post('application', 'Controllers\Login@application');
Router::post('accommodationLogged', 'Controllers\Login@logged_accommodation');



/** Module routes. */
$hooks = Hooks::get();
$hooks->run('routes');

/** If no route found. */
Router::error('Core\Error@index');

/** Turn on old style routing. */
Router::$fallback = false;

/** Execute matched routes. */
Router::dispatch();
