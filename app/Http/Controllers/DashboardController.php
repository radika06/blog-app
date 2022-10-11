<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data['users'] = DB::table('users')->count();
		$data['posts'] = DB::table('posts')->count();
        return view('admin.index',compact('data'));
    }
}