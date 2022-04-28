<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortContent;
use App\Models\Team;
use App\Models\Partner;
use App\Models\Letter;

class DashboardController extends Controller
{
    public function index()
    {
        $data['port_count']    = PortContent::where('lang',0)->count();
        $data['team_count']    = Team::where('lang',0)->count();
        $data['partner_count'] = Partner::count();
        $data['letter_count']  = Letter::count();
        return view('admin.index', $data);
    }
}