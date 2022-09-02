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

    public function indexBasic(){
        $developers=User::all();
        return view('admin.Developers.indexBasic');

    }
    public function indexContact(){
        $developers=User::all();
        return view('admin.Developers.indexContact');

    }
    public function indexSkill(){
        $developers=User::all();
        return view('admin.Developers.indexSkill');

    }
    public function indexFormation(){
        $developers=User::all();
        return view('admin.Developers.indexFormation');

    }
    public function indexOther(){
        $developers=User::all();
        return view('admin.Developers.indexOther');

    }
    



}
