<?php

namespace App\Http\Controllers;

use App\Models\PlayStation;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Plus;

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
    public function index()
    {
        return view('home');
    }

    public function coba()
    {
        // $playstation = PlayStation::all();
        $playstation = PlayStation::with(['alat', 'category'])->get();
        return view('coba', compact('playstation'));
    }


    public function produk()
    {
        return view('product');
    }
}
