<?php

namespace Laravelcustompackage\Timezonescustom;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonescustomController extends Controller
{

    public function index($timezone)
    {
        echo Carbon::now($timezone)->toDateTimeString();
    }

}
