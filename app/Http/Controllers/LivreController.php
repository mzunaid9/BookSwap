<?php

namespace App\Http\Controllers;

use App\Models\livre;
use Illuminate\Http\Request;
use Redirect;

class LivreController extends Controller
{
    public function index(){
        $livres = livre::all();
        return view("home",[
            "livres"=>$livres
        ]);
    }

    public function showLivres($id){
        $livre=livre::findOrFail($id);
        return view("show",[
            "livre"=>$livre
        ]);
    }

    public function createLivre(){
        $situation="create";
        return view("formulaire",[
            "situation"=>$situation
        ]);
    }

    public function saveLivre(Request $request){
        livre::create([
            "titre"=>$request->titre,
            "auteur"=>$request->auteur,
            "description"=>$request->description
        ]);
        return redirect()->route('home');
    }

    public function deleteLivres($id){
        $livre=livre::findOrFail($id);
        $livre->delete();
        return redirect()->route('home');
    }

    public function updateLivres1($id){
        $situation="update";
        $livre=livre::findOrFail($id);
        return view('formulaire',[
            "livre"=>$livre,
            "situation"=>$situation
        ]);
    }

    public function updateLivres2($id,Request $request){
        $livre=livre::findOrFail($id);
        $livre->update([
            "titre"=>$request->titre,
            "auteur"=>$request->auteur,
            "description"=>$request->description
        ]);
        return redirect()->route('home');
    }
}
