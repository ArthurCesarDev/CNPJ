<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\User;
use App\Models\Page;
use App\Models\Link;

class AdminController extends Controller
{

    public function __construct(){
        $this->middleware('auth',['except'=>[
            'register',
            'registerAction',
            'sigilo',
            'sigiloId',
            'sucesso'
            
        ]]);
    }
    
    public function register(Request $request){
        return view('admin/register',[
            'error' => $request->session()->get('error')
        ]);
    
   }
      
   public function registerAction(Request $request) {

   $validacao = $request->validate([
    
    'empresa' => 'required',
    'email' => 'required',
    'cnpj' => 'required',
    'nome' => 'required',
   
  ]); 
   $newUser = new User();
   $newUser->empresa = $request->empresa;
   $newUser->email = $request->email;
   $newUser->nome = $request->nome;
   $newUser->cnpj = $request->cnpj;
   $newUser->save();

   return redirect('/sucesso');   
   
   $request->session()-flash('alerta-sucess', 'campos obrigatorio');
   return redirect()->route('/register');
   }
  public function sigilo(Request $request){

    $dados = User::get();

    return view('admin/page',[
        'dados' => $dados
    ]);

}
public function sucesso(Request $request){
    return view('admin/sucesso',[
        'error' => $request->session()->get('error')
    ]);

}

public function sigiloId($id){
    $dados = User::find($id);
    return view('admin/sigiloId')->with('dados' ,$dados);

}

  
}