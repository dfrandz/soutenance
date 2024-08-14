<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Models\Role;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public $currentUser;

    public function __construct()
    {
        $this->middleware(['auth:web']);

        // Récupérer l'utilisateur actuellement connecté
        $this->currentUser = Auth::guard('web');
    }
    

    public function index(){
        $roles = Role::all();
        
        // return response()->json([
        //     'status_code' => 200,
        //     'message' => 'Roles retrieved successfully',
        //     'data' => $roles
        // ]);
        // dd($roles);
        return view('admin.pages.roles.index', [
            'admin' => $this->currentUser->user(),
            'roles' => $roles
        ]);
    }

    public function storeRole(StoreRoleRequest $request){
        try {
            $role = new Role();
            $role->libelle = $request->libelle;
            $role->save();

            return response()->json([
            'status_code' => 201,
            'message' => 'Roles store',
            'data' => $role
        ]);

        } catch (Exception $e) {
            return response()->json($e);
        }
        
    }
}
