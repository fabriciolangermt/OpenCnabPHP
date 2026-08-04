<?php

namespace CnabPHP\resources\B133\remessa\cnab240;

use CnabPHP\resources\generico\remessa\cnab240\Generico5;

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
            'tamanho' => 92,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'filler3' => array(
            'tamanho' => 125,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
    );
}
