<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'admin01', 'full_name' => 'Carlo Dela Cruz', 'role' => 'Administrator'],
            ['username' => 'cashier01', 'full_name' => 'Bea Ramos', 'role' => 'Cashier'],
            ['username' => 'cashier02', 'full_name' => 'Miguel Flores', 'role' => 'Cashier'],
            ['username' => 'manager01', 'full_name' => 'Liza Navarro', 'role' => 'Manager'],
            ['username' => 'staff01', 'full_name' => 'Noel Bautista', 'role' => 'Inventory Staff'],
        ];

        return view('users/index', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}
