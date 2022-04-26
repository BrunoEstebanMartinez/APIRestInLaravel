<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class Users extends Controller
{
    public function getUsers(){
        $User = User::All();
        return $User;
    }
}
