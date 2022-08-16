<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $developers=User::all();
        return view('admin.Developers.index');
        
    }
}
