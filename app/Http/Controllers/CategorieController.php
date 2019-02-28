<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use Auth;
class CategorieController extends Controller
{
    public function index(){
           
    }

   
        public function Accueil(){
        $listCateg=Categorie::all();
           return view('welcome',['listCateg'=>$listCateg]);
    }

     public function Contact(){
        $listCateg=Categorie::all();
           return view('contact',['listCateg'=>$listCateg]);
    }

    

       public function Register(){
        $listCateg=Categorie::all();
           return view('auth.login',['listCateg'=>$listCateg]);
    }

      public function Product_summary(){
        $listCateg=Categorie::all();
           return view('product_summary',['listCateg'=>$listCateg]);
    }

     public function menuCategorie(){
        $listCateg=Categorie::all();
           return view('partage.menuCategorie',['listCateg'=>$listCateg]);
    }

      
    
    /*  public function Special_offer(){
        $listCateg=Categorie::all();
           return view('special_offer',['listCateg'=>$listCateg]);
    }
*/
      public function Apropos(){
        $listCateg=Categorie::all();
           return view('apropos',['listCateg'=>$listCateg]);
    }

    /* public function Forgetpass(){
        $listCateg=Categorie::all();
           return view('forgetpass',['listCateg'=>$listCateg]);
    }

       public function Espace_client_auth(){
        $listCateg=Categorie::all();
           return view('esp_client.espace_client_auth',['listCateg'=>$listCateg]);
    }

     public function Espace_fournisseur(){
        $listCateg=Categorie::all();
           return view('esp_fournisseur.espace_fournisseur',['listCateg'=>$listCateg]);
    }

    */


    	public function store(Request $request){
        
        if($request->isMethod('post')){
            $this->validate($request,['nom'=>'max:25|unique:categories']);
    
        $categorie=new Categorie();
        $categorie->nom=$request->input('nomDeCategorie');
        $categorie->user_id=Auth::user()->id;
        $categorie->save();
        session()->flash('success','la catégorie à été bien ajoutée !! ');
           return redirect('add_categorie');
        }
       // else{
        //return view('esp_admin.add_categorie');
       //}
    }

    public function edit(){
    	
    }

    public function update(){
    	
    }

    public function destroy(){
    	
    }
}
