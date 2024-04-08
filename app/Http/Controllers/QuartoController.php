<?php

namespace App\Http\Controllers;

use App\Models\quarto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class QuartoController extends Controller
{

    public function showFormularioCadastroQuarto(Request $request){
        return view("formularioCadastroQuarto");
    }

    public function cadQuarto(Request $request){
        $dadosValidos = $request->validate([
            'numeroQuarto' => 'integer|required',
            'tipoQuarto' => 'string|required',
            'valorDiario' => 'numeric|required'
        ]);

        quarto::create($dadosValidos);
        return Redirect::to('/');
    }

    public function gerenciarQuarto(Request $request){
        $dadosQuarto = Quarto::query();
        $dadosQuarto->when($request->numero, function($query, $valor){
            $query->where('numeroQuarto', 'like','%'.$valor.'%');
        });
        $dadosQuarto = $dadosQuarto->get();

        return view('gerenciarQuarto',['registroQuartos' => $dadosQuarto]);
    }

    public function destroy(Quarto $id){
        $id->delete();
        return Redirect::to('/');
    }

    public function formAlterarQuarto(Quarto $id){
        return view('formularioAlterQuarto', ['registroQuartos' => $id]);
    }

    public function alterarQuarto(Quarto $id, Request $request) {
        $dadosValidos = $request->validate([
            'numeroQuarto' => 'integer|required',
            'tipoQuarto' => 'string|required',
            'valorDiario' => 'numeric|required'
        ]);
        $id->fill($dadosValidos);
        $id->save();
        return Redirect::to('/');
    }
}
