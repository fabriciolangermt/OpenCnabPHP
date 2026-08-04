<?php

namespace CnabPHP\resources\B133\retorno\L084;

use CnabPHP\resources\generico\retorno\L084\Generico1;
use CnabPHP\RetornoAbstract;

class Registro1 extends Generico1
{
    public $trailler;

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
            'default' => 'T',
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
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'numero_inscricao' => array(
            'tamanho' => 15,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'convenio' => array(
            'tamanho' => 9,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'cobranca_cedente' => array(
            'tamanho' => 4,
            'default' => '0000',
            'tipo' => 'int',
            'required' => true),
        'carteira_cobranca' => array(
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'carteira_cobranca_dv' => array(
            'tamanho' => 3,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'filler3' => array(
            'tamanho' => 2,
            'default' => ' ',
            'tipo' => 'int',
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
        'filler4' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
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
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'data_gravacao' => array(
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'date',
            'required' => true),
        'data_credito' => array(
            'tamanho' => 8,
            'default' => ' ',
            'tipo' => 'date',
            'required' => true),
        'filler5' => array(
            'tamanho' => 33,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true)
    );

    public function __construct($linhaTxt)
    {
        parent::__construct($linhaTxt);
        $this->inserirDetalhe($linhaTxt);
    }

    public function inserirDetalhe($linhaTxt)
    {
        while ($this->data['codigo_lote'] == abs(substr(RetornoAbstract::$lines[RetornoAbstract::$linesCounter], 3, 4)))
        {
            RetornoAbstract::$linesCounter++;
            $class            = 'CnabPHP\resources\\B' . RetornoAbstract::$banco . '\retorno\\' . RetornoAbstract::$layout . '\Registro3T';
            $this->children[] = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
        }

        RetornoAbstract::$linesCounter--;
        array_pop($this->children);
    }
}
