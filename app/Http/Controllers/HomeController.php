<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function mostrarRaiz(){
        return "Esta es la ruta raiz";
    }

    public function irAHola(){
        return view('hola');
    }

    public function irAChau(){
        return view('chau');
    }

    public function irABienvenido(){
        return view('bienvenido');
    }

    public function ejecutarPost(Request $request){
        $numero = $request->inputDeNumero;
        $texto = $request->inputDeTexto;
        //return "El texto es: ".$texto." - El numero es: ".$numero;
        if($numero>100){
            return view('bienvenido');
        }else{
            return view('hola');
        }
    }

    //---------------------------------------------------------------------------------

    public function mostrarFormularioIniciarSesion(){
        return view('iniciarSesion');
    }

    public function verificarDatosDeInicioDeSesion(Request $request){
        $usuario=$request->usuario;
        $contra=$request->contra;
        if($usuario=="jroget"){
            if($contra=="123"){
                return view('bienvenido');
            }else{
                return redirect()->back()->with('mensaje','Contraseña incorrecta');
            }
        }else{
            return redirect()->back()->with('mensaje','Usuario incorrecto');
        }
    }
}
