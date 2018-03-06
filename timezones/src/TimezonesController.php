<?php
/**
 * Created by PhpStorm.
 * User: varun
 * Date: 05-03-2018
 * Time: 07:54 PM
 */

namespace Laraveldaily\Timezones;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{

	public function index($timezone = NULL)
	{
		$current_time = ($timezone)
			? Carbon::now(str_replace('-', '/', $timezone))
			: Carbon::now();
		return view('timezones::time', compact('current_time'));
	}


}