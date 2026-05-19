<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Responses\Dashboard\AnalyticsResponse;
use App\Http\Responses\Dashboard\SiteStatsResponse;
use App\Http\Responses\Dashboard\UpTimeResponse;

class DashboardController extends Controller
{
    public function analytics(): AnalyticsResponse
    {
        return new AnalyticsResponse();
    }

    public function upTime(): UpTimeResponse
    {
        return new UpTimeResponse();
    }

    public function siteStats(): SiteStatsResponse
    {
        return new SiteStatsResponse();
    }
}
