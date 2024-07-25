<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    //

    public function listFormations()
    {
        return view('client.pages.formations.listformation');
    }
}
