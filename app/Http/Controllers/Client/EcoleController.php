<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EcoleController extends Controller
{
    //

    public function ecoles()
    {
        return view('client.pages.ecoles.list');
    }
}
