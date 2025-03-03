<?php

namespace App\Http\Controllers;

use App\Models\livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index(){
        $livres = livre::all();
        return view("home",compact('livres'));
    }
}
