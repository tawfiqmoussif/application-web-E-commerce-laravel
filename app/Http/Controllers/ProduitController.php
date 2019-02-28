<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Image;
use App\Produit;
use App\Categorie;
use App\Http\Requests\produitRequest;
use Auth;


class ProduitController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        $listProduit=Produit::where('user_id',Auth::user()->id)->get();
        $listCateg=Categorie::all();
        return view('esp_fournisseur.product',['listProduit'=>$listProduit , 'listCateg'=>$listCateg]);
    }

    

    public function create(){
        $listCateg=Categorie::all();
           return view('esp_fournisseur.add_product',['listCateg'=>$listCateg]);
    }

         

    
    	public function store(produitRequest $request){
        
        //if($request->isMethod('post')){
        $Produit=new Produit();
        $Produit->nom=$request->input('nom');
        $Produit->prix=$request->input('prix');
        $Produit->nombre=$request->input('nombre');
        $Produit->description=$request->input('description');
        $Produit->user_id= Auth::user()->id;
        //$Produit->image=$request->input('image'); 
       // if ($request->hasFile('photo')) {
            
          // $Produit->photo=$request->photo->store('image');
        //
   // }
        $img_name=time().'.'.$request->photo->getClientOriginalExtension();
       $img=Image::make($request->file('photo'));
        
        $img->resize(null,300,function($ratio){
            $ratio->aspectRatio(); 
        });
        $request->photo->move(public_path('upload'),$img_name);
        $Produit->photo=$img_name;
    
        $categorie=new Categorie();
        $id=$request->input('nomCategorie');
        $categorie=Categorie::find($id);
        //$categorie=(Categorie::where('nom',$request->input('nomCategorie')));
        $Produit->categorie_id=$categorie->id;
        $Produit->save();
          session()->flash('success','le produit à été bien ajouté !! ');
          return redirect('product');
        
        }
       // }

        
            
          //  return view('');
       
    
    

    public function edit($id){
    	$produit=Produit::find($id);
         $listCateg=Categorie::all();
           $this->authorize('update',$produit);
        return view('esp_fournisseur.edit',['produit'=>$produit,'listCateg'=>$listCateg]);
    }

    public function update(produitRequest $request,$id){
    	   $produit=Produit::find($id);
            $produit->nom=$request->input('nom');
            $produit->prix=$request->input('prix');
            $produit->nombre=$request->input('nombre');
            $produit->description=$request->input('description');
   
            $categorie=new Categorie();
        $id=$request->input('nomCategorie');
        $categorie=Categorie::find($id);
        $produit->categorie_id=$categorie->id;
            $produit->save();

            return redirect('product'); 

    }

    public function destroy(Request $request,$id){
    	$produit=Produit::find($id);
        $produit->delete();
        return redirect('product');
    }



    public function adresse(){
        return view('esp_client.adresse');

    }



    
}
