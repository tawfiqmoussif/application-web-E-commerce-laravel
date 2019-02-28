<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Fournisseur;
use App\Client;
use App\Role;
use App\Categorie;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $listCateg=Categorie::all();
        $this->middleware('guest');
    
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
               /* $User=new User();
                 $User->name=request('name');
        $User->email=request('email');
        $User->password=bcrypt(request('password'));
        $User->save();
        
        if(request('Genre')=='Client'){
             
            $cl=new Client();
            $cl->user_id=$User->id;

        
        $cl->save();
        }

        else{
        
            $four=new Fournisseur();
            $four->user_id=$User->id;
            $four->save();
        }
*/

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        if(request('Genre')=='Client'){
        $user->roles()->attach(Role::where('name','client')->first());
    }
        if(request('Genre')=='Fournisseur'){
        $user->roles()->attach(Role::where('name','fournisseur')->first());
    }

        return $user;
        
    }
}
