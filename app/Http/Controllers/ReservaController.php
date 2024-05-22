<?php

namespace App\Http\Controllers;

use App\Models\reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ReservaController extends Controller
{

    public function showFormularioCadastroReserva(Request $request)
    {
        return view("formularioCadastroReserva");
    }

    public function cadReserva(Request $request)
    {
        $dadosValidos = $request->validate([
            'idcliente' => 'integer|required',
            'idfuncionario' => 'integer|required',
            'numeroquarto' => 'integer|required',
            'situacao' => 'string|required',
            'valortotal' => 'numeric|required',
            'dataSaida' => 'date|required',
            'dataEntrada' => 'date|required'
        ]);

        reserva::create($dadosValidos);
        return Redirect::to('/');
    }

    public function gerenciarReserva(Request $request){
       $dadosReserva =Reserva::query();
       $dadosReserva->when($request->numero, function($query, $valor){
        $query->where('numeroQuarto', 'like','%'.$valor.'%');
    });
    $dadosReserva = $dadosReserva->get();


        return view('gerenciarReserva', ['registroReserva'=>$dadosReserva]);
    }


    public function destroy(Reserva $id){
        $id->delete();
        return Redirect::to('/');
    }

    public function formAlterarReserva(Reserva $id){
        return view('formularioAlterReserva', ['registroReserva' => $id]);
    }

    public function alterarReserva(Reserva $id, Request $request) {
        $dadosValidos = $request->validate([
            
        'idcliente' =>'integer|required',
        'idfuncionario' =>'integer|required',
        'numeroquarto' =>'integer|required',
        'situacao'=>'string|required',
        'valortotal' =>'integer|required',
        'dataEntrada' =>'date|required',
        'dataSaida' =>'date|required' 


        ]);
        $id->fill($dadosValidos);
        $id->save();
        return Redirect::to('/');
   }


 }
