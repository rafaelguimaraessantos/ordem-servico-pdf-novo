<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

class OrdemServicoController extends Controller
{
    public function gerarPdf()
    {
        $os = [
            'numero' => '03372/25',
            'prefixo' => 'PP-JCA',
            'data' => '15/07/2024',

            'empresa' => 'MTX Aviation Manutenção De Aeronaves Ltda',
            'cidade_estado' => 'Sorocaba/SP - COM 201306-41/ANAC',
            'formulario' => 'F.TEC.015.REV03',

            'airframe' => [
            'sn' => 'LA-107',
            'modelo' => 'F90',
            'fabricante' => 'BEECH',
            'ano_fabricacao' => '1981',
            'tsn' => '9442.7',
            'tso' => 'N/A',
            'csn' => '10353',
            'cso' => 'N/A',
            'revisao' => 'Manual:C0 / Revision:M.M. / PN:109-590010-19',
        ],


        'left_engine' => [
            'sn' => 'PCE-92264',
            'modelo' => 'PT6A-135',
            'fabricante' => 'PRATT & WHITNEY CANADA',
            'tsn' => '9442.7',
            'tso' => '2412',
            'csn' => '10350',
            'cso' => '2126',
            'revisao' => 'Manual:49 / Revision:M.M. / PN:3043512',
        ],

        'right_engine' => [
            'sn' => 'PCE-92269',
            'modelo' => 'PT6A-135',
            'fabricante' => 'PRATT & WHITNEY CANADA',
            'tsn' => '9442.7',
            'tso' => '2412',
            'csn' => '10350',
            'cso' => '2126',
            'revisao' => 'Manual:49 / Revision:M.M. / PN:3043512',
        ],

        'left_propeller' => [
            'sn' => 'EAA-1533',
            'modelo' => 'HC-B4TN-3B',
            'fabricante' => 'HARTZELL',
            'tsn' => '4275.6',
            'tso' => '75.7',
            'revisao' => 'Manual:22 / Revision:P.O.M. / PN:139 (61-00-39)',
        ],

        'right_propeller' => [
            'sn' => 'EAA-1553',
            'modelo' => 'HC-B4TN-3B',
            'fabricante' => 'HARTZELL',
            'tsn' => '4275.6',
            'tso' => '359.4',
            'revisao' => 'Manual:22 / Revision:P.O.M. / PN:139 (61-00-39)',
        ],

        'periodo' => [
            'inicio' => '09/06/2025',
            'fim' => '20/06/2025',
        ],

        'descricao' => [
            'descricao' => 'RESUMO DE ITENS EXECUTADOS',
        ],
        'itens' => [
            ['numero' => 1, 'descricao' => 'EFETUAR SUBSTITUIÇÃO DO TRANSMISSOR DE PRESSÃO DE OLEO LADO DIREITO', 'equipe' => 'André Segato - inspector | Thiago Paulucci Dos Santos - inspector'],
            ['numero' => 2, 'descricao' => 'EFETUAR SUBSTITUIÇÃO PNEU INTERNO DIREITO APRESENTANDO PERDA DE PRESSÃO', 'equipe' => 'André Segato - inspector | Thiago Paulucci Dos Santos - inspector'],
            ['numero' => 3, 'descricao' => 'AVALIAR JUNTAS DA TAMPA DA NACELE ESQUERDA', 'equipe' => 'André Segato - inspector | Thiago Paulucci Dos Santos - inspector'],
            ['numero' => 4, 'descricao' => '(MSR) AIRFRAME > LUBRICATE ITEMS 6M | Intervalo: 6M | Horas: N/A | Ciclos N/A', 'equipe' => 'André Segato - inspector | Thiago Paulucci Dos Santos - inspector'],
            ['numero' => 5, 'descricao' => '(MSR) LEFT ENGINE > CHECK AGB INTERNAL SCAVENGE OIL PUMP INLET SCREEN | Intervalo: 6M | Horas: 200 | Ciclos N/A', 'equipe' => 'André Segato - inspector | Thiago Paulucci Dos Santos - inspector'],
            ['numero' => 6, 'descricao' => '(MSR) RIGHT ENGINE > CHECK AGB INTERNAL SCAVENGE OIL PUMP INLET SCREEN | Intervalo: 6M | Horas: 200 | Ciclos N/A', 'equipe' => 'André Segato - inspector | Thiago Paulucci Dos Santos - inspector'],
            ['numero' => 7, 'descricao' => 'TANQUE DA NACELLE LH DANIFICADO', 'equipe' => 'André Segato - inspector | Thiago Paulucci Dos Santos - inspector'],
            ['numero' => 8, 'descricao' => 'BARRAMENTO BUSTIE DIREITO POR VEZES ABRE', 'equipe' => 'Marcio Messias Silva - inspector | Silvio Vicente - mechanic'],
            ['numero' => 9, 'descricao' => 'AUDIOS AURAIS DO SISTEMA DE AVIONICS INOPERANTE', 'equipe' => 'Marcio Messias Silva - inspector | Silvio Vicente - mechanic'],
            ['numero' => 10, 'descricao' => 'EFETUAR SUBSTITUIÇÃO DE UMA PROBE DE COMBUSTIVEL LADO ESQUERDO', 'equipe' => 'André Segato - inspector | Thiago Paulucci Dos Santos - inspector'],
            ['numero' => 11, 'descricao' => 'EFETUAR SUBSTITUIÇÃO DE INDICADOR DE COMBUSTIVEL LH E AFERIÇÃO DO SISTEMA', 'equipe' => 'Marcio Messias Silva - inspector | Silvio Vicente - mechanic'],
            ['numero' => 12, 'descricao' => 'VERIFICAR COMANDO DO TRIM QUANTO A INTEGRIDADE', 'equipe' => 'André Segato - inspector | Thiago Paulucci Dos Santos - inspector'],
        ],
    ];
        $declaracao = "DECLARAÇÃO DE AERONAVEGABILIDADE";
        $assinatura = "_________________________________________________________";


        $pdf = PDF::loadView('ordem-servico.pdf', compact('os', 'declaracao','assinatura'))
        ->setPaper('a4', 'portrait')
        ->setOption('margin-top', 0)
        ->setOption('margin-bottom', 0)
        ->setOption('margin-left', 0)
        ->setOption('margin-right', 0);

        return $pdf->inline('ordem-servico.pdf');
    }
} 