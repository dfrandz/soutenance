<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LayoutController extends Controller
{
    //
    public $currentUser;

    public function __construct()
    {
        $this->middleware(['auth:web']);

        // Récupérer l'utilisateur actuellement connecté
        $this->currentUser = Auth::guard('web');
    }

    public function dashboard(){
        return view('admin.pages.dashboard', ['admin' => $this->currentUser->user()]);
    }

   
}
