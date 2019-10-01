<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tor;

class TorController extends Controller
{
    public function listaTorPessoaFisica()
    {
        $tors = DB::select("select *from tor where tor = 'Pessoa Fisica'");

        //$contratos = Contrato::all();
        return view('TermoReferencia.ListaTor')->with('tors', $tors);
    }

    public function cria()
    {
        //$num_tor = $_REQUEST['num_tor'];
        $tipo = $_REQUEST['tipo'];
        $titulo = $_REQUEST['titulo'];
        $plano_trabalho= $_REQUEST['acao'];
        $TituloConponente = $_REQUEST['componente'];
        $entidade = $_REQUEST['entidade'];
        $endereco = $_REQUEST['endereco'];
        $nome = $_REQUEST['nome'];
        $telefone = $_REQUEST['telefone'];
        $problema = $_REQUEST['problema'];
        $objetivo_geral = $_REQUEST['objetivo_geral'];
        $objetivo_especifico = $_REQUEST['objetivoEsp'];
        $Problema_atividade= $_REQUEST['atividade'];
        $objetivo_produto = $_REQUEST['produtos'];
        $objetivo_apresentacao = $_REQUEST['apresentacao'];
        $inicio = implode("-", array_reverse(explode("/", $_REQUEST['inicio'])));
        $fim = implode("-", array_reverse(explode("/", $_REQUEST['fim'])));
        $custo_contratado= $_REQUEST['CustosContratado'];
        $custo_contratante= $_REQUEST['CustosContratante'];
        $forma_pagamento= $_REQUEST['pagamento'];
        $tor = $_REQUEST['tor'];
        
        DB:: insert('insert into tor (tipo, titulo, plano_trabalho, TituloComponente, entidade, endereco, nome, telefone, problema, objetivo_geral, objetivo_especifico, Problema_atividade, objetivo_produto, objetivo_apresentacao, data_inicio, data_fim, custo_contratado, custo_contratante, forma_pagamento, tor) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', array($tipo, $titulo, $plano_trabalho, $TituloConponente, $entidade, $endereco, $nome, $telefone, $problema, $objetivo_geral, $objetivo_especifico, $Problema_atividade, $objetivo_produto, $objetivo_apresentacao, $inicio, $fim, $custo_contratado, $custo_contratante, $forma_pagamento, $tor));

        $tors = DB::table('tor');
        return $this->listaTorPessoaFisica();
    }


    public function remove($id)
    {
        DB:: delete('delete from contrato where id = ' . $id);
        return redirect()->to('contratos')->send();
    }

    public function mostra($id){
        $contrato = Contrato::find($id);
        if(empty($contrato)) {
            return "Esse contrato não existe";
        }
        return view('Contrato.edit_contrato')->with('contrato', $contrato);
    }
}

