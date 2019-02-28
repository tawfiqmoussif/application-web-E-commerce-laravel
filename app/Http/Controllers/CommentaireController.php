<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commentaire;
use App\Produit;

class CommentaireController extends Controller
{
    public function store(Produit $produit)
    {
    	Commentaire::create([
    	    'texte'=> request('body'),
    	     'produit_id'=> $produit->id
    	 ]);
    	return back();
    }
}
