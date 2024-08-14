<?php
namespace App\Services;

use App\Http\Requests\LoginUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthService{

    public function registerUser($data): User{
        // login logic here
        $user = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password'],
            'staust' => true,
            'role_id' => "e6c3427d-4f20-11ef-8dc4-141877adf611"
        ]);
        return $user;
    }

    public function logniUser($data): bool{
        $result = Auth::guard('web')->attempt($data);
        return $result;
    }

    
}
