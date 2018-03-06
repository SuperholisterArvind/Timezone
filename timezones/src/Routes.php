<?php
/**
 * Created by PhpStorm.
 * User: varun
 * Date: 05-03-2018
 * Time: 07:55 PM
 */


Route::get('timezones/{timezone}',
	'laraveldaily\timezones\TimezonesController@index');