<?php
 
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tor; 
use PDF;
  
class pdfController extends Controller
{
    public function printPDF($id)
    {
        $tors = DB::select('SELECT *FROM tor WHERE numTor = '.$id);
        foreach ($tors as $tor) {
            $data = [
                'titulo' => $tor->titulo,
                'cabecalho' => 'Contrato de '.$tor->tipo,
                'tipo' => $tor->tipo,
                'numTor' => $tor->numTor,
                'plano' => $tor->plano_trabalho,
                'componente' => $tor->TituloComponente,
                'entidade' => $tor->entidade,
                'endereco' => $tor->endereco,
                'nome' => $tor->nome,
                'telefone' => $tor->telefone,
                'problema' => $tor->problema,
                'objetivo_geral' => $tor->objetivo_geral,
                'objetivo_especifico' => $tor->objetivo_especifico,
                'problema_atividade' => $tor->Problema_atividade,
                'objetivo_produto' => $tor->objetivo_produto,
                'objetivo_apresentacao' => $tor->objetivo_apresentacao,
                'data_inicio' => $tor->data_inicio,
                'data_fim' => $tor->data_fim,
                'custo_contratado' => $tor->custo_contratado,
                'custo_contratante' => $tor->custo_contratante,
                'forma_pagamento' => $tor->forma_pagamento,
                'tor' => $tor->tor,
            ];
        }
        $pdf = PDF::loadView('pdf_view', $data); 
        return $pdf->stream('medium.pdf');
    }
}