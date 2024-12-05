<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'id_usuario' => 'required|integer',
            'contrasena' => 'required|string',
        ]);

        $usuario = Usuario::where('id_usuario', $request->id_usuario)->first();

        if ($usuario) {
            if (Hash::check($request->contrasena, $usuario->contrasena)) {

                session(['rol' => $usuario->rol]);
                session(['id' => $usuario->id_usuario]);


                if ($usuario->rol == 1) {
                    return redirect(to: '/1');
                } elseif ($usuario->rol == 2) {
                    return redirect('/2');
                }

            } else {
                return redirect('/login')->withErrors(['mensajeError' => 'Contraseña incorrecta.']);
            }
        } else {
            return redirect('/login')->withErrors(['mensajeError' => 'Usuario no encontrado.']);
        }
    }
   
}