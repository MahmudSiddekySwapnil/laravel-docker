<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class testController extends Controller
{
    //

    public function test(){
        $users = User::all();
dd($users);
    }
}
