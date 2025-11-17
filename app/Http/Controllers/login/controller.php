<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class controllerLogin extends Controller
{
    /**
     * Enviando para o formulario de login
     */
    public function loginForm()
    {
        return view('login');
    }

    /**
     * Realizando a validação do login direto a base usuários
     */
    public function logar(Request $dadosFormulario)
    {

        //Variaveis do sistema
        $usuario = $dadosFormulario->username;
        $senha = $dadosFormulario->password;

        if (Auth::attempt(['email' => $usuario, 'password' => $senha])) {

            if (auth()->user()->active === 1) {

                return redirect()->back()->withErrors(array('error' => 'Usuário desativado!'));

            } else {

                #administrador
                if(auth()->user()->admin === 1){
                    return view('adm.index');
                }

                #usuario padrão
                return view('index');
            }
        } else {
            return redirect()->back()->withErrors(array('error' => 'Usuário não localizado'));
        }
    }

    /**
     * Deslogar da conta
     */
    public function deslogar()
    {

        Auth::logout();

        return redirect()->route('login')->with(array('success' => 'Até mais!'));
    }
}
