<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function homepage()
    {	
    	$variavel=" - Página inicial do Sistema de Informação Hospitalar";
    	return view ('welcome',['title'=>$variavel]);
    }

    public function cadastrar()
    {
    	echo "Tela de Inscrição";
    }

    /*
    #########################################################################
	 Metodo para Implementação da Tela de Login,,,, Autenticação do Utilizador
	 View da Tela Login
	 #########################################################################
*/

    public function fazerLogin()
    {
    	return view('user.login'); 
    	echo "Tela de Login";
    }
}
