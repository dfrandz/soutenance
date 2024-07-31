<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GlobalController extends Controller
{
    //
    public $currentUser;

    public function __construct()
    {
        $this->middleware(['auth:web']);

        // Récupérer l'utilisateur actuellement connecté
        $this->currentUser = Auth::guard('web');
    }

    public function getGlobalData()
    {
        // Vous pouvez définir des variables globales ici
        return [
            'admin' => $this->currentUser->user(),
        ];
    }
}
