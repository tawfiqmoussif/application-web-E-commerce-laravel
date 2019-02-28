<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Produit;
use App\Categorie;
use DB;
use Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        $listProduit=Produit::all();
        $listCateg=Categorie::all();
        return view('welcome',['listProduit'=>$listProduit , 'listCateg'=>$listCateg]);
    }

    public function Product_detail(Produit $produit){
    	//$produit = DB::table('produits')->find(1);
    	          $listCateg=Categorie::all();
                  $cartItems=Cart::content();
                  return view('product_detail',compact('produit','listCateg','cartItems'));
    }

    public function Produit(Produit $produit){
        //$produit = DB::table('produits')->find(1);
                  $listCateg=Categorie::all();
                  $listProduit=Produit::where('user_id',Auth::user()->id)->get();
                  return view('esp_fournisseur.produit',compact('produit','listCateg','listProduit'));
    }

}
