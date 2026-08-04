<?php

namespace CnabPHP\resources\B133\remessa\cnab240;

use CnabPHP\RemessaAbstract;
use CnabPHP\resources\generico\remessa\cnab240\Generico1;

class Registro1 extends Generico1
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
            'default' => 1,
            'tipo' => 'int',
            'required' => true),
        'operacao' => array(
            'tamanho' => 1,
            'default' => 'R',
            'tipo' => 'alfa',
            'required' => true),
        'tipo_servico' => array(
            'tamanho' => 2,
            'default' => '01',
            'tipo' => 'int',
            'required' => true),
        'filler1' => array(
            'tamanho' => 2,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'versa_layout' => array(
            'tamanho' => 3,
            'default' => '042',
            'tipo' => 'int',
            'required' => true),
        'filler2' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'tipo_inscricao' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'numero_inscricao' => array(
            'tamanho' => 15,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'convenio' => array(
            'tamanho' => 9,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'cobranca' => array(
            'tamanho' => 4,
            'default' => '0000',
            'tipo' => 'int',
            'required' => true),
        'carteira' => array(
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'variacao' => array(
            'tamanho' => 3,
            'default' => '000',
            'tipo' => 'int',
            'required' => true),
        'situacao_arquivo' => array(
            'tamanho' => 2,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'agencia' => array(
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'agencia_dv' => array(
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'conta' => array(
            'tamanho' => 12,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'conta_dv' => array(
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'filler3' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true),
        'nome_empresa' => array(
            'tamanho' => 30,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'mensagem_fixa1' => array(
            'tamanho' => 40,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'mensagem_fixa2' => array(
            'tamanho' => 40,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'numero_remessa' => array(
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'data_gravacao' => array(
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'date',
            'required' => true),
        'filler4' => array(
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'filler5' => array(
            'tamanho' => 33,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
    );

    protected function set_carteira($value)
    {
        $this->data['carteira'] = RemessaAbstract::$entryData['carteira'];
    }

    protected function set_convenio($value)
    {
        $this->data['convenio'] = RemessaAbstract::$entryData['convenio'];
    }
}
