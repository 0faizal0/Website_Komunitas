<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;


class AdminController extends Controller
{

    public function __contructor(){
        $this->middleware('admin');
    }

    public function index(){
        return view('dashboardadmin');
    }
}
