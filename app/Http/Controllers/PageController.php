<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->username;

        return view('dashboard', compact('username'));
    }

    public function profile(Request $request)
    {
        $username = $request->username;

        return view('profile', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->username;

        $teams = [
        [
            'nama' => 'FASILKOM UNEJ',
            'kapten' => 'Rizky',
            'status' => 'Verified'
        ],
        [
            'nama' => 'VIVA UNEJ',
            'kapten' => 'Dimas',
            'status' => 'Verified'
        ],
        [
            'nama' => 'FEB UT',
            'kapten' => 'Gilang',
            'status' => 'Pending'
        ],
        [
            'nama' => 'SETIA PEMBANGUNAN',
            'kapten' => 'Garalt',
            'status' => 'Verified'
        ],
        [
            'nama' => 'TEKNIK UNEJ',
            'kapten' => 'Sabil',
            'status' => 'Pending'
        ],
        [
            'nama' => 'FKG UNEJ',
            'kapten' => 'MrAmba',
            'status' => 'Verified'
        ]
    ];

        return view('pengelolaan', compact('username', 'teams'));
    }
}