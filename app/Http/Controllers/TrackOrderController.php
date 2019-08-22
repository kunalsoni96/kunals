<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterCategory;

class TrackOrderController extends Controller
{
    public function index(request $request){
    	$cat = MasterCategory::where('Status',1)->get();
    	return view('TrackOrder',compact('cat'));
    }
}
