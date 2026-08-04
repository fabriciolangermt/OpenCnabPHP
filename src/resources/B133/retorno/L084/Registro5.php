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
            'tamanho' => 9,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'qtd_registros' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'filler2' => array(
            'tamanho' => 217,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
    );
}
