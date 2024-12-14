<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'guard_name' => 'required'
        ]);

        $role = Role::create($request->all());

        return response()->json($role, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Assign permission to role
     */
    public function assignPermission(Request $request)
    {
        try {
            $request->validate([
                'role_id' => 'required',
                'permissions' => 'required|array'
            ]);

            // Find the role
            $role = Role::findById($request->role_id);

            // Assign permissions
            foreach ($request->permissions as $permission) {
                $role->givePermissionTo($permission);
            }

            return response()->json([
                'success' => true,
                'statusCode' => 200,
                'message' => 'Permissions have been assigned to the role successfully.',
                'data' => $role->permissions, // Return assigned permissions
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'statusCode' => 500,
                'message' => 'Internal server error.',
                'data' => $e->getMessage(),
            ], 500);
        }
    }
}
