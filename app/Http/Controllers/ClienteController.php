<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClienteController extends Controller
{
    public function showHome(){
        return view("home");
    }

    public function showFormularioCadastro(){
    return view("formularioCadastroClie");
    }

    public function CadCliente(Request $request){
        $dadosValidos = $request->validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'fone' => 'string|required'
        ]);

        Cliente::create($dadosValidos);
        return Redirect::to('/');
    }

    public function formAlterarCliente(Cliente $id){

        return view('formularioAlterarCliente',['registrosClientes' => $id]);
    }
    
    public function gerenciarCliente(Request $request){
        $dadosCliente = Cliente::query();
        $dadosCliente->when($request->nome, function($query, $valor){
            $query->where('nome','like','%'.$valor.'%');
        });
        $dadosCliente = $dadosCliente->get();

        return view('gerenciarCliente',['registrosClientes' => $dadosCliente]);
    }

    public function destroy(Cliente $id){
        $id->delete();
        return Redirect::to('/');
    }
    
    public function alterClie(Cliente $id, Request $request){
        $dadosValidos = $request->validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'fone' => 'string|required'
        ]);
        $id->fill($dadosValidos);
        $id->save();
        return Redirect::to('/');
    }


}
