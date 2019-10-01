<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contrato;

class ContratoController extends Controller
{
    public function lista()
    {
        $contratos = DB::table('contrato')->paginate(8);

        //$contratos = Contrato::all();
        return view('Contrato.listar_contratos')->with('contratos', $contratos);
    }

    public function listaAtraso()
    {
        $contratos = Contrato::all();
        return view('home')->with('contratos', $contratos);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cria()
    {
        $num_contrato = $_REQUEST['num_contrato'];
        $objeto = $_REQUEST['objeto'];
        $inicio = implode("-", array_reverse(explode("/", $_REQUEST['inicio'])));
        $fim = implode("-", array_reverse(explode("/", $_REQUEST['fim'])));
        $num_edital = $_REQUEST['num_edital'];
        $modalidade = $_REQUEST['modalidade'];
        $arquivo = $_REQUEST['arquivo'];
        $link = $_REQUEST['link'];

        DB:: insert('insert into contrato (numContrato, Objeto_contrato, data_inicio, data_fim, num_ano, modalidade, documentos, links) values(?,?,?,?,?,?,?,?)', array($num_contrato, $objeto, $inicio, $fim, $num_edital, $modalidade, $arquivo, $link));
        $contratos = DB::table('contrato')->paginate(8);

        //$contratos = Contrato::all();
        return view('Contrato.listar_contratos')->with('contratos', $contratos);
    }

    public function ler_arquivo()
    {

        DB:: insert('insert into contrato (numContrato, Objeto_contrato, data_inicio, data_fim, num_ano, modalidade, documentos, links) values(?,?,?,?,?,?,?,?)', array($num_contrato, $objeto, $inicio, $fim, $num_edital, $modalidade, $arquivo, $link));
        $contratos = Contrato::all();
        return view('Contrato.listar_contratos')->with('contratos', $contratos);
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

    public function diferencaEmDias($data1, $data2){
        $diferenca = strtotime($data2) - strtotime($data1);
        $segundos_de_um_dia = 60 * 60 * 24;
        $dias = intval( $diferenca / $segundos_de_um_dia );
 
        return $dias;
    }

    public function ContratosAVencer(){
        $contratos = Contrato::all();
        foreach ($contratos as $contrato) {
            $data_inicial = $contrato->data_inicio;
            $data_final = $contrato->data_fim;
            $data_atual = date("Y-m-d");
            // retorna número de dias entre a data inicial e final
            $dias_dtInicial_x_dtFinal = $this->diferencaEmDias($data_inicial, $data_final);
        
            // retorna número de dias entre a data atual e final
            $dias_dtAtual_x_dtFinal = $this->diferencaEmDias($data_atual, $data_final);
            
            // retorna número de dias entre a data atual e inicial
            $dias_dtAtual_x_dtInicial = $this->diferencaEmDias($data_inicial, $data_atual);   
            
            $porcentagem = 100 - (round((($dias_dtAtual_x_dtInicial / $dias_dtInicial_x_dtFinal) * 100), 2));
            $lista[] = $porcentagem;
            if($porcentagem <= 30){
                $contrato = DB::update("update contrato set situacao='A vencer' where id =$contrato->id");
            }else
            $contrato = DB::update("update contrato set situacao='' where id =$contrato->id");
        }
        $contratos = DB::select("select *from contrato where situacao = 'A vencer'");
        return view('home')->with('contratos', $contratos);
    }

    public function converter($segundos, $formato) {
        $dtF = new \DateTime('@0');
        $dtT = new \DateTime("@$segundos");
        return $dtF->diff($dtT)->format($formato);
    }

    public function venceContrato(){
        $contratos = Contrato::all();
        foreach ($contratos as $contrato) {
            $data_inicial = $contrato->data_inicio;
            $data_final = $contrato->data_fim;
            $data_atual = date("Y-m-d");
            $diffInicioFim = strtotime($data_final) - strtotime($data_inicial);
            $diffInicioAgora = strtotime($data_atual) - strtotime($data_inicial);
            $porcentagem = $diffInicioAgora / $diffInicioFim * 100;
            $lista[] = $porcentagem;
            if($porcentagem >= 70 && $porcentagem < 100){
                $contrato = DB::update("update contrato set situacao='A vencer' where id =$contrato->id");
            }elseif($porcentagem >= 100){
                $contrato = DB::update("update contrato set situacao='Vencido' where id =$contrato->id");
            }else
            $contrato = DB::update("update contrato set situacao='' where id =$contrato->id");
        }
        $contratos = DB::select("select *from contrato where situacao = 'A vencer'");
        return view('home')->with('contratos', $contratos);
    }
}

