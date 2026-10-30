<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUsers()
    {
        return response()->json([
            'users' =>[
                [
                    'id'=>1,
                    'name'=>'john doe',
                    'email'=>'johndoe@gamil.com',
                    'role'=>'admin'
                ],
                [
                     'id'=>2,
                     'name'=>'kasun chamara',
                     'email'=>'kasunchamara@gmail.com',
                     'role'=>'admin'
                ],
                [
                    'id'=>3,
                    'name'=>'nuwan sadruwan',
                    'email'=>'nuwansadruwan@gmail.com',
                    'role'=>'admin'
                ]
            ]
        ])
    }
}
