<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){

        $roles = Role::all();

        return response()->json($roles);
    }

    public function store(StoreRoleRequest $request){

        $role = new Role();

        $role->name = $request->name;

        $role->save();

        return response()->json([
            'message' => 'Role was added successfully'
        ]);

    }

    public function show($id){
        $role = Role::findOrFail($id);

        return response()->json($role);
    }

    public function destroy($id){
        $role = Role::findOrFail($id);

        $role->delete();

        return response()->json([
            'message' => 'Role was deleted successfully'
        ]);
    }

    public function update(UpdateRoleRequest $request, $id){

        $role = Role::findOrFail($id);

        $role->name = $request->name;

        $role->update();

        return response()->json([
            'message' => 'Role was updated successfully.'
        ]);
    }
}
