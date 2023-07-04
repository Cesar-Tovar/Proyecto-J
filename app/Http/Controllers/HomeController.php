<?php

namespace App\Http\Controllers;

use App\Models\Productos;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $prod = Productos::latest()
            ->take(4)
            ->get();

        return view('home')
            ->with(['prod' => $prod]);
    }
}
