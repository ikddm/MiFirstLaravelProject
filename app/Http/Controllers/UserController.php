<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\User;


class UserController extends Controller
{
    public function mostrarDatos(Request $request): View {
        $nombre = request('nombre');
        $apellido = request('apellido');
        $edad = request('edad');
        $telefono = request('telefono', '0');
    
    
       return view('respuesta')-> with('nombre',$nombre);
    }

    public function mostrarBigPun():View{

        return view('bigpun');

    }
    public function cargarFormulario():View{
        return view('formulario');
    }

    public function mostrarNombre(string $name):string{
        return "Se llama name $name";
    }
    public function mostrarRespuestaFormulario():View{
        return view('respuesta');
    }
    public function mostrarIndex():View{
        return view('index');
    }
    public function insertarUsuario()
{
    // Crear una nueva instancia del modelo User
    $user = new User;

    // Asignar valores a las propiedades del modelo
    $user->id = '3';
    $user->name = 'master';
    $user->email = 'correo@ejemplo.com';
    $user->password = bcrypt('1');

  

    // Guardar el registro en la base de datos
    $user->save();

    // Realizar una redirección o mostrar una respuesta, por ejemplo:
    return redirect()->route('nombre_de_ruta')->with('success', 'Usuario creado con éxito');
}
    

}
