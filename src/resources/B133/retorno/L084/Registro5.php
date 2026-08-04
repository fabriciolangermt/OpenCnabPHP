<?php

namespace CnabPHP\resources\B133\retorno\L084;

use CnabPHP\resources\generico\retorno\L084\Generico5;

class Registro5 extends Generico5
{
    protected $meta = array(
        'codigo_banco' => array(
            'tamanho' => 3,
            'default' => '133',
            'tipo' => 'int',
            'required' => true),
        'codigo_lote' => array(
            'tamanho' => 4,
            'default' => 1,
            'tipo' => 'int',
            'required' => true),
        'tipo_registro' => array(
            'tamanho' => 1,
            'default' => '5',
            'tipo' => 'int',
            'required' => true),
        'filler1' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'qtd_registros' => array(
            'tamanho' => 9,
            'default' => ' ',
            'tipo' => 'int',
            'required' => true),
        'qtd_titulos_simples' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'vrl_titulos_simples' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => '2',
            'required' => true),
        'qtd_titulos_caucionada' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'vlr_titulos_caucionada' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => '2',
            'required' => true),
        'qtd_titulos_descontada' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'vlr_titulos_descontada' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => '2',
            'required' => true),
        'filler2' => array(
            'tamanho' => 31,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'filler3' => array(
            'tamanho' => 128,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
    );
}
