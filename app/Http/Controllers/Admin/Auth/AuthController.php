<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    protected $authService;
    protected $isconnect;
    // Injecter le service dans le constructeur
    public function __construct(AuthService $userService)
    {
        $this->authService = $userService;
    }


    public function login()
    {
        return view('admin.auth.login');
    }

    public function register()
    {
        return view('admin.auth.register');
    }

    public function customRegistration(StoreUserRequest $request)
    {   
        $data = $request->validated();
        try {
            $this->authService->registerUser($data);
            return response()->json(['success'=>true, 'message'=>"administrateur crée reussie"], 200);
        } catch (\Throwable $th) {
            return response()->json(['success'=>false, 'error'=>"erreur"], 500);
        }
    }

    public function customLogin(LoginUserRequest $request)
    {
        // $data = $request->validated();
        $data = $request->validated();
        try {
            $this->isconnect = $this->authService->logniUser($data);
            if($this->isconnect){
                return response()->json(['success'=>true, 'message'=>"Connection reussie"], 200);
            }
            return response()->json(['success'=>false, 'error'=>"erreur de credential"]);
        } catch (\Throwable $th) {
            return response()->json(['success'=>false, 'error'=>"erreur serveur"]);
        }
        
        // if($this->isconnect){
        //     return response()->json(['success'=>true, 'message'=>"administrateur crée reussie"], 200);
        // }
        
    }

    public function logOut(){
        Auth::guard('web')->logout();
        return redirect('/');
    }

}
