<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ClientsShowController extends Controller
{
    //
    public function index()
    {
        dd(Auth::user());
        $clients = Auth::user()->id;
        return $clients;
    }
}
