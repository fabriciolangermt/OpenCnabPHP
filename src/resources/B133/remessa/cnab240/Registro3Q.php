<?php

namespace CnabPHP\resources\B133\remessa\cnab240;

use CnabPHP\resources\generico\remessa\cnab240\Generico3;

class Registro3Q extends Generico3
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
            'default' => '3',
            'tipo' => 'int',
            'required' => true),
        'numero_registro' => array(
            'tamanho' => 5,
            'default' => '2',
            'tipo' => 'int',
            'required' => true),
        'seguimento' => array(
            'tamanho' => 1,
            'default' => 'Q',
            'tipo' => 'alfa',
            'required' => true),
        'filler1' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'codigo_movimento' => array(
            'tamanho' => 2,
            'default' => '01',
            'tipo' => 'int',
            'required' => true),
        'tipo_inscricao' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'numero_inscricao' => array(
            'tamanho' => 15,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'nome_pagador' => array(
            'tamanho' => 40,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'endereco_pagador' => array(
            'tamanho' => 40,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'bairro_pagador' => array(
            'tamanho' => 15,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'cep_pagador' => array(
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'cidade_pagador' => array(
            'tamanho' => 15,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'uf_pagador' => array(
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'tipo_inscricao_avalista' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'numero_inscricao_avalista' => array(
            'tamanho' => 15,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'nome_avalista' => array(
            'tamanho' => 40,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'filler2' => array(
            'tamanho' => 3,
            'default' => '000',
            'tipo' => 'alfa',
            'required' => true),
        'filler3' => array(
            'tamanho' => 28,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
    );

    protected function set_cep_pagador($value)
    {
        $this->data['cep_pagador'] = preg_replace('/\D/', '', $value);
    }
}
