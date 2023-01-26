<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class AdminController extends Controller
{

    public function showAdminPage() {
        if(auth()->user()->role != 0) {
            abort(403, "NOT AUTHORIZED LOL");
        }
        if(auth()->check() && auth()->user()->role == 0) { //if logged in and is admin
            return view('AdminPage')->with(['products' => Product::all()]);
        }

        return view('AdminPage');

    }
    
}
