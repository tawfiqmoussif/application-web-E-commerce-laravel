<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use DB;
use App\Jaime;
use App\Produit;
use Auth;
use App\Categorie;

class PagesController extends Controller
{
    public function add_categorie(){
        $listCateg=Categorie::all();
    	return view('esp_admin.add_categorie',compact('listCateg'));
    }

     public function admin(){
     	$users= User::all();
        $listCateg=Categorie::all();
    	return view('esp_admin.admin',compact('users','listCateg'));
    }
    
         public function add_role(Request $request){
     	$user=User::where('email',$request['email'])->first();
     	$user->roles()->detach();
     	if($request['role_client']){
     		$user->roles()->attach(Role::where('name','client')->first());
     	}
     	if($request['role_fournisseur']){
     		$user->roles()->attach(Role::where('name','fournisseur')->first());
     	}
     	if($request['role_admin']){
     		$user->roles()->attach(Role::where('name','admin')->first());
     	}
    	return redirect()->back();
    }
    
     public function jaime(Request $request){
        $jaime_s=$request->jaime_s;
        $produit_id=$request->produit_id;

        $jaime=DB::table('jaimes')
              ->where('produit_id',$produit_id)
              ->where('user_id',Auth::user()->id)
              ->first();
        if(!$jaime){
            $new_jaime =new Jaime;
            $new_jaime->produit_id=$produit_id;
            $new_jaime->user_id=Auth::user()->id;
            $new_jaime->jaime=1;
            $new_jaime->save();
        }
        elseif($jaime->jaime==1){
            DB::table('jaimes')
                ->where('produit_id',$produit_id)
                ->where('user_id',Auth::user()->id)
                ->delete();
        }
        elseif($jaime->jaime==0){
            DB::table('jaimes')
                ->where('produit_id',$produit_id)
                ->where('user_id',Auth::user()->id)
                ->update(['like'=>1]);
        }
     }


     public function search(Request $request){
      $searchData= $request->searchData;
     $dataS = DB::table('produits')
      //->join('cats','cats.id','products.cat_id')
      ->where(['nom'=>$searchData,'deleted_at'=>null] )
      ->get();
      $listCateg=Categorie::all();
      return view('search',compact('dataS','listCateg'));
    }

}
