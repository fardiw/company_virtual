<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    

    public function __invoke(Request $request)
    {
        if ($request->input('name')) {
            $query = $request->input('name');
            $users = User::with('skills')->where('first_name', 'LIKE', "%{$query}%")
                ->orWhere('last_name', 'LIKE', "%{$query}%")->get();
                return view('search', [
                    'users' => $users
                ]);
        }
        return view('search', [
            'users' => null
        ]);
    }

    
}
