<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function getAllUsers()
    {
        return response()->json([
            'users' => [
                [
                    'id' => 1,
                    'name' => 'john doe',
                    'email' => 'johndoe@gmail.com',
                    'role' => 'admin'
                ],
                [
                    'id' => 2,
                    'name' => 'kasun chamara',
                    'email' => 'kasunchamara@gmail.com',
                    'role' => 'admin'
                ],
                [
                    'id' => 3,
                    'name' => 'nuwan sadruwan',
                    'email' => 'nuwansadruwan@gmail.com',
                    'role' => 'admin'
                ]
            ]
        ]);
    }
}
