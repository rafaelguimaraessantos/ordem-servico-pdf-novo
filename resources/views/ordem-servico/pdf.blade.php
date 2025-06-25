<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>Ordem de Serviço</title>
        <style type="text/css">
            @font-face {
              font-family: 'DejaVuSans';
              src: url('file:///var/www/public/fonts/DejaVuSans.ttf') format('truetype');
              font-weight: normal;
            }

            @font-face {
              font-family: 'DejaVuSans';
              src: url('file:///var/www/public/fonts/DejaVuSans-Bold.ttf') format('truetype');
              font-weight: bold;
            }

            

            p {margin: 0; padding: 0;}
            .ft10 {font-size:16px;font-family:Times;color:#000000;}
            .ft11 {font-size:12px;font-family:Times;color:#000000;}
            .ft12 {font-size:20px;font-family:Times;color:#000000;}
            .ft13 {font-size:10px;font-family:Times;color:#000000;}
            .ft14 {font-size:13px;font-family:Times;color:#000000;}
            .ft20 {font-size:22px;font-family:Times;color:#000000;}
            .ft21 {font-size:16px;font-family:Times;color:#000000;}
            .ft22 {font-size:30px;font-family:Times;color:#000000;}
            .ft23 {font-family: 'DejaVuSans', sans-serif;font-size: 22pt;}
            .ft24 {font-family: 'DejaVuSans', sans-serif;font-size: 17pt;}
            .ft25 {font-family: 'DejaVuSans', sans-serif;font-size: 13pt;}
            .ft26 {font-family: 'DejaVuSans', sans-serif;font-size: 11pt;}
            .ft27 {font-family: 'DejaVuSans', sans-serif;font-size: 10pt;}
            .ft28 {font-family: 'DejaVuSans', sans-serif;font-size: 12pt;}
            .ft29 {font-family: 'DejaVuSans', sans-serif;font-size: 15pt;}
            .section-title {font-size:14px;font-family:Times;color:#000000;margin-top:10px;font-weight:bold;}
        </style>
    </head>
    <body bgcolor="#ffffff" vlink="blue" link="blue">

        <!-- Página 1 -->
        <div id="page1-div" style="position:relative;width:900px;height:1450px;">
            <img style="position:absolute;top:-8px;left:0px;" width="1240" height="1770" src="{{ public_path('target001.png') }}" alt="background page 1"/>

            <!-- Cabeçalho -->
            <p style="position:absolute;top:90px;left:360px;white-space:nowrap" class="ft24"><b>MTX Aviation    Manutenção  De  Aeronaves   Ltda</b></p>
            <p style="position:absolute;top:115px;left:500px;" class="ft25">{{ $os['cidade_estado'] ?? 'Sorocaba/SP - COM 201306-41/ANAC' }}</p>
            <p style="position:absolute;top:95px;left:1020px;" class="ft25">{{ $os['formulario'] ?? 'F.TEC.015.REV03' }}</p>
            <p style="position:absolute;top:115px;left:1050px;" class="ft25">{{ $os['data'] }}</p>
            <p style="position:absolute;top:185px;left:320px;" class="ft23"><b>OS #{{ $os['numero'] }}</b></p>
            <p style="position:absolute; top:185px; left:950px; white-space: nowrap;" class="ft23"><b>{{ $os['prefixo'] }}</b> 
            </p>

            <p style="position:absolute;top:260px;left:100px;" class="ft26">AIRFRAME</p>
            <p style="position:absolute;top:250px;left:260px;" class="ft26">SN: {{ $os['airframe']['sn'] }}</p>
            <p style="position:absolute;top:250px;left:440px;" class="ft26">Modelo: {{ $os['airframe']['modelo'] }}</p>
            <p style="position:absolute;top:250px;left:650px;" class="ft26">Fabricante:{{ $os['airframe']['fabricante'] }}</p>
            <p style="position:absolute;top:250px;left:910px; white-space: nowrap;" class="ft26">Ano de Fabricação: {{ $os['airframe']['ano_fabricacao'] }}</p>
            <p style="position:absolute;top:265px;left:260px;" class="ft26">TSN: {{ $os['airframe']['tsn'] }}</p>
            <p style="position:absolute;top:265px;left:440px;" class="ft26">TSO: {{ $os['airframe']['tso'] }}</p>
            <p style="position:absolute;top:265px;left:650px;" class="ft26">CSN: {{ $os['airframe']['csn'] }}</p>
            <p style="position:absolute;top:265px;left:910px; white-space: nowrap;" class="ft26">CSO: {{ $os['airframe']['cso'] }}</p>
            <p style="position:absolute;top:280px;left:260px;" class="ft26">Revisão:{{ $os['airframe']['revisao'] }}</p>   

            <!-- LEFT ENGINE -->
            <p style="position:absolute;top:360px;left:90px;" class="ft26">LEFT ENGINE</p>
            <p style="position:absolute;top:350px;left:260px;" class="ft26">SN: {{ $os['left_engine']['sn'] }}</p>
            <p style="position:absolute;top:350px;left:440px;" class="ft26">Modelo: {{ $os['left_engine']['modelo'] }}</p>
            <p style="position:absolute;top:335px;left:650px;" class="ft26">Fabricante: {{ $os['left_engine']['fabricante'] }}</p>
            <p style="position:absolute;top:368px;left:260px;" class="ft26">TSN: {{ $os['left_engine']['tsn'] }}</p>
            <p style="position:absolute;top:368px;left:440px;" class="ft26">TSO: {{ $os['left_engine']['tso'] }}</p>
            <p style="position:absolute;top:368px;left:650px;" class="ft26">CSN: {{ $os['left_engine']['csn'] }}</p>
            <p style="position:absolute;top:368px;left:910px; white-space: nowrap;" class="ft26">CSO: {{ $os['left_engine']['cso'] }}</p> 
            <p style="position:absolute;top:388px;left:260px; white-space: nowrap;" class="ft26">Revisão:{{ $os['left_engine']['revisao'] }}</p> 

            <p style="position:absolute;top:465px;left:85px;" class="ft26">RIGHT ENGINE</p>
            <p style="position:absolute;top:450px;left:260px;" class="ft26">SN: {{ $os['right_engine']['sn'] }}</p>
            <p style="position:absolute;top:450px;left:440px;" class="ft26">Modelo: {{ $os['right_engine']['modelo'] }}</p>
            <p style="position:absolute;top:438px;left:650px;" class="ft26">Fabricante: {{ $os['right_engine']['fabricante'] }}</p>

            <p style="position:absolute;top:470px;left:260px;" class="ft26">TSN: {{ $os['right_engine']['tsn'] }}</p>
            <p style="position:absolute;top:470px;left:440px;" class="ft26">TSO: {{ $os['right_engine']['tso'] }}</p>
            <p style="position:absolute;top:470px;left:650px;" class="ft26">CSN: {{ $os['right_engine']['csn'] }}</p>
            <p style="position:absolute;top:470px;left:910px; white-space: nowrap;" class="ft26">CSO: {{ $os['right_engine']['cso'] }}</p>
            <p style="position:absolute;top:485px;left:260px;" class="ft26">Revisão: {{ $os['right_engine']['revisao'] }}</p>

            <!-- Hélices -->
            <p style="position:absolute;top:560px;left:80px;" class="ft26">LEFT PROPELLER</p>

            <p style="position:absolute;top:550px;left:260px;" class="ft26">SN: {{ $os['left_propeller']['sn'] }}</p>
            <p style="position:absolute;top:550px;left:440px;" class="ft26">Modelo: {{ $os['left_propeller']['modelo'] }}</p>
            <p style="position:absolute;top:550px;left:650px;" class="ft26">Fabricante: {{ $os['left_propeller']['fabricante'] }}</p>
            <p style="position:absolute;top:565px;left:650px;" class="ft26">
                CSN: {{ $os['left_propeller']['csn'] ?? 'N/A' }}
            </p>
            <p style="position:absolute;top:565px;left:260px;" class="ft26">TSN: {{ $os['left_propeller']['tsn'] }}</p>
            <p style="position:absolute;top:565px;left:440px;" class="ft26">TSO: {{ $os['left_propeller']['tso'] }}</p>
            <p style="position:absolute;top:580px;left:260px;" class="ft26">Revisão: {{ $os['left_propeller']['revisao'] }}</p>
            <p style="position:absolute;top:565px;left:910px; white-space: nowrap;" class="ft26">
                CSO: {{ $os['left_propeller']['cso'] ?? 'N/A' }}
            </p>

            <p style="position:absolute;top:655px;left:80px;" class="ft26">RIGHT PROPELLER</p>

            <p style="position:absolute;top:645px;left:260px;" class="ft26">SN: {{ $os['right_propeller']['sn'] }}</p>
            <p style="position:absolute;top:660px;left:260px;" class="ft26">TSN: {{ $os['right_propeller']['tsn'] }}</p>
            <p style="position:absolute;top:675px;left:260px;" class="ft26">Revisão: {{ $os['right_propeller']['revisao'] }}</p>
            <p style="position:absolute;top:645px;left:440px;" class="ft26">Modelo: {{ $os['right_propeller']['modelo'] }}</p>
            <p style="position:absolute;top:660px;left:440px;" class="ft26">TSO: {{ $os['right_propeller']['tso'] }}</p>
            <p style="position:absolute;top:645px;left:650px;" class="ft26">Fabricante: {{ $os['right_propeller']['fabricante'] }}</p>
            <p style="position:absolute;top:660px;left:650px;" class="ft26">
                CSN: {{ $os['right_propeller']['csn'] ?? 'N/A' }}
            </p>
            <p style="position:absolute;top:660px;left:910px; white-space: nowrap;" class="ft26">
                CSO: {{ $os['right_propeller']['cso'] ?? 'N/A' }}
            </p>

            <p style="position:absolute;top:740px;left:211px;" class="ft28">
                Data de início: {{ $os['periodo']['inicio'] ?? 'N/A' }}
            </p>
            <p style="position:absolute;top:740px;left:795px; white-space: nowrap;" class="ft28">
                Término previsto: {{ $os['periodo']['fim'] ?? 'N/A' }}
            </p>
            <p style="position:absolute;top:806px;left:450px; white-space: nowrap;" class="ft29">
                {{ $os['descricao']['descricao'] ?? 'N/A' }}
            </p>    
            
            <p style="position:absolute; top:1580px; left:370px;  white-space: nowrap;" class="ft29">
                <b>{{ $declaracao }}</b>
            </p>
            <p style="position:absolute; top:1650px; left:315px; white-space: pre-line;" class="ft29">
                {{ $assinatura }}
            </p>
            @php
                $top = 870;
            @endphp

            @foreach($os['itens'] as $i => $item)
                @php
                    // Separar a parte fixa da descrição e o intervalo
                    $partes = explode('Intervalo:', $item['descricao'], 2);
                    $descricao_principal = $partes[0];
                    $descricao_intervalo = isset($partes[1]) ? 'Intervalo:' . $partes[1] : '';

                    $limitePorLinha = 90;
                    $linhasDescricao = ceil(strlen($item['descricao']) / $limitePorLinha);
                    $alturaDescricao = $linhasDescricao * 16;
                    $ajusteDescricao = -5;
                    $espacoTotal = max(60, $alturaDescricao + 25);
                @endphp

                <p style="position:absolute;top:{{ $top }}px;left:60px;" class="ft25">{{ $item['numero'] }}</p>

                <p style="position:absolute;top:{{ $top + $ajusteDescricao }}px;left:112px;width:800px;" class="ft25">
                    {!! e(trim($descricao_principal)) !!}
                    @if($descricao_intervalo)
                        <span class="ft28" style="position: relative; top: -3px; white-space: nowrap;">
                            {{ trim($descricao_intervalo) }}
                        </span>
                    @endif
                </p>

                <p style="position:absolute;top:{{ $top + $alturaDescricao + $ajusteDescricao }}px;left:112px;" class="ft26">
                    Equipe: {{ $item['equipe'] }}
                </p>

                @php
                    $top += $espacoTotal;
                @endphp
            @endforeach      
        </div>

        <!-- Página 2 -->
        <div id="page2-div" style="page-break-before: always; position:relative; width:900px; height:1450px;">
            <img style="position:absolute;top:0;left:0;" width="1240" height="1400"  src="{{ public_path('target002.png') }}" alt="background page 2"/>
            <p style="position:absolute; top:10px; left:70%; transform: translateX(-50%); white-space: nowrap;" class="ft29">
                Assinatura do Inspetor Responsável
            </p>
            <p style="position:absolute; top:30px; left:70%; transform: translateX(-50%);" class="ft29">
                SDCO
            </p>
        </div>
    </body>
</html>

