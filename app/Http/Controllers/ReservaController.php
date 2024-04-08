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

    public function gerenciarReserva(){
        return view('gerenciarReserva');
    }
}
