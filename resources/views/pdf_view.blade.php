<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>{{ $titulo }}</title>
	</head>
	<style>
		@media all {
			.break { display: none; }
		}
		@media print {
			.break { display: block; page-break-before: always; }
		}
	</style>
	<body>
		<h4 style="text-align: center"><strong>{{ strtoupper($titulo) }}</strong></h4>
		<br>
		<p style="text-align: center">{{ mb_strtoupper($cabecalho, 'UTF-8') }}</p>
		<p style="text-align:justify;">Pelo presente instrumento particular, em que são partes, de um lado , pessoa jurídica de Direito Privado, inscrita no CNPJ sob nº. , sediada à , Bairro , , doravante denominada CONTRATADA ou COMODANTE e de outro, o CONTRATANTE ou  COMODATÁRIO  devidamente qualificado neste contrato, tem entre si, justo e avençado o presente contrato de monitoramento, rastreamento e bloqueio remoto via sistema de localização GPS e comunicação via telefonia celular móvel, bem como o comodato dos equipamentos listados no termo, doravante denominado apenas Rastreamento Veicular, mediante adesão às cláusulas e condições estabelecidas neste Contrato que reger-se-á pelas seguintes cláusulas e condições abaixo descritas:</p>
		<br>

		<h5><strong>IDENTIFICAÇÃO DO TOR</strong></h5>
		<div class="row">
			<div class="col-xs-6"><strong>Número do Termo de Referencia: </strong>{{ $numTor }}</div>
			<div class="col-xs-6"><strong>Tipo: </strong>{{ $tipo }}</div>
    </div>
    <div class="row">
			<div class="col-xs-6"><strong>Titulo: </strong>{{ $titulo }}</div>
			<div class="col-xs-6"><strong>Titulo do componente: </strong>{{ $componente }}</div>
		</div>
		<div class="row">
			<div class="col-xs-6"><strong>Tipo de Pessoa: </strong>{{ $tor }}</div>
		</div>
		<br>
		
		<h5><strong>1 – IDENTIFICAÇÃO DO CONTRATANTE</strong></h5>
		<p style="text-align:justify;">{{ mb_strtoupper($nome, 'UTF-8') }} identificado com a razão social {{$entidade}}, localizado no endereço {{ $endereco }}, telefone nº {{ $telefone }}.</p>
		<br>

		<h5><strong>2 – ANTECEDENTES</strong></h5>
		<p style="text-align:justify;">{{ $problema }}</p>
    <br>
    
    <h5><strong>2 – PLANO DE TRABALHO</strong></h5>
		<p style="text-align:justify;">{{ $plano }}</p>
    <br>
    
    <h5><strong>2 – OBETIVO DA CONTRATAÇÃO</strong></h5>
    <h5><strong>2.1 – OBETIVO GERAL</strong></h5>
		<p style="text-align:justify;">{{ $objetivo_geral }}</p>
    <br>
    <h5><strong>2.2 – OBETIVO ESPECIFICO</strong></h5>
		<p style="text-align:justify;">{{ $objetivo_especifico }}</p>
    <br>
    
    <h5><strong>3 – ATIVIDADES</strong></h5>
		<p style="text-align:justify;">{{ $problema_atividade }}</p>
    <br>

    <h5><strong>4 – PRODUTOS</strong></h5>
		<p style="text-align:justify;">{{ $objetivo_produto }}</p>
    <br>

    <h5><strong>5 – FORMAS DE APRESENTAÇÃO</strong></h5>
		<p style="text-align:justify;">{{ $objetivo_apresentacao }}</p>
    <br>

    <h5><strong>6 – CUSTOS</strong></h5>
    <p style="text-align:justify;">O contratante deverá arcar com custos efetivos no valor de R$ {{ $custo_contratado }}, sendo que a parte contratada se responsabilizará pelos custos no valor de R$ {{ $custo_contratante }}. O mesmo acordo será pago do seguinte modo:</p>
    <p style="text-align:justify;">{{ $forma_pagamento }}.</p>
    <br>
		
		<br><br>

		<div class="row">
			<div class="col-xs-6">
				<p style="text-align: center">_____________________________________</p>
				<p style="text-align: center">{{$entidade}}</p>
			</div>
			<div class="col-xs-6">
				<p style="text-align: center">_____________________________________</p>
				<p style="text-align: center">CONTRATANTE / COMODATÁRIO</p>
			</div>
		</div>
		<br>
	</body>
</html>
