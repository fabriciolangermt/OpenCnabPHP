<?php

namespace CnabPHP\resources\B133\retorno\L084;

use CnabPHP\resources\generico\retorno\L084\Generico3;
use CnabPHP\RetornoAbstract;

class Registro3T extends Generico3
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
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'seguimento' => array(
            'tamanho' => 1,
            'default' => 'T',
            'tipo' => 'alfa',
            'required' => true),
        'filler1' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'codigo_movimento' => array(
            'tamanho' => 2,
            'default' => '',
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
        'conta_corrente' => array(
            'tamanho' => 12,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'dv_conta' => array(
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'filler2' => array(
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'nosso_numero' => array(
            'tamanho' => 20,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'codigo_carteira' => array(
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        'seu_numero' => array(
            'tamanho' => 15,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'data_vencimento' => array(
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'date',
            'required' => true),
        'valor' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'cod_banco_receb' => array(
            'tamanho' => 3,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'agencia_recebedora' => array(
            'tamanho' => 5,
            'default' => ' ',
            'tipo' => 'int',
            'required' => true),
        'dv_agencia_receb' => array(
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'identificacao_titulo_empresa' => array(
            'tamanho' => 25,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'codigo_moeda' => array(
            'tamanho' => 2,
            'default' => '',
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
        'filler3' => array(
            'tamanho' => 10,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        'vlr_tarifa' => array(
            'tamanho' => 13,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'motivo_rejeicao' => array(
            'tamanho' => 10,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true),
        'filler4' => array(
            'tamanho' => 17,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true),
    );

    public function __construct($data = null)
    {
        if (empty($this->data))
        {
            parent::__construct($data);
        }

        $this->inserirDetalhe($data);
    }

    public function inserirDetalhe($data)
    {
        RetornoAbstract::$linesCounter++;
        $class            = 'CnabPHP\resources\\B' . RetornoAbstract::$banco . '\retorno\\' . RetornoAbstract::$layout . '\Registro3U';
        $this->children[] = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
    }

    public function get_data_ocorrencia()
    {
        return $this->R3U->data_ocorrencia;
    }

    public function get_data_credito()
    {
        return $this->R3U->data_credito;
    }

    public function get_vlr_juros_mora()
    {
        return $this->R3U->vlr_juros_mora;
    }

    public function get_vlr_multa()
    {
        return 0;
    }

    public function get_vlr_abatimento()
    {
        return $this->R3U->vlr_abatimento;
    }

    public function get_vlr_desconto()
    {
        return $this->R3U->vlr_desconto;
    }

    public function get_vlr_pago()
    {
        return $this->R3U->vlr_pago;
    }
}
