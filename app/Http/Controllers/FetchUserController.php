<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class FetchUserController extends Controller
{
    public function fetch()
    {
        $users = User::all();

        return $user;
    }
}
