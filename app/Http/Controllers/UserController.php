<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Client;
use App\Fournisseur;
use App\Http\Requests\registerRequest;
class UserController extends Controller
{
     public function store(registerRequest $request){
        
        //if($request->isMethod('post')){
        $User=new User();
        $User->name=$request->input('name');
        $User->Sexe=$request->input('Sexe');
        $User->email=$request->input('email');
        $User->password=$request->input('password');
        $User->Addresse=$request->input('Addresse');
        $User->Ville=$request->input('Ville');
        $User->Pays=$request->input('Pays');
        $User->Code_postale=$request->input('Code_postale');
        $User->Telephone=$request->input('Téléphone');

        $User->save();
        if($request->input('Genre')=='Client'){
            $cl=new Client();
            $cl->user_id=$User->id;

        
        $cl->save();
        }

        else{
            $four=new Fournisseur();
            $four->user_id=$User->id;
            $four->save();
        }
            
            return redirect('register');
       
    //}

     
}

public function check(Request $request){
         $email=$request->input('Email');
         $password=$request->input('Password');
         $checkLogin = DB::select('select * from users where Email=? and Password=?',[$email,$password]);
         foreach ($checkLogin as $line ) {
            $checkExist=DB::select('select * from clients where user_id=? ',[$line->id]);
            if(count($checkExist)==1){
             echo $line->id;
             echo "exi";
            }
            else{
                echo "not";
            }
         }
         
        }
        }



