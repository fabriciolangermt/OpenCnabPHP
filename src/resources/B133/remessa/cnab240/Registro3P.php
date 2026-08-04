<?php

namespace CnabPHP\resources\B133\remessa\cnab240;

use CnabPHP\resources\generico\remessa\cnab240\Generico3;
use CnabPHP\RemessaAbstract;

class Registro3P extends Generico3
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
            'default' => 'P',
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
        'agencia' => array(
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'agencia_dv' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true),
        'conta' => array(
            'tamanho' => 12,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'conta_dv' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true),
        'filler2' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'identificacao_produto' => array(
            'tamanho' => 8,
            'default' => '00000000',
            'tipo' => 'alfa',
            'required' => true),
        'nosso_numero' => array(
            'tamanho' => 12,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true),
        'codigo_carteira' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true),
        'forma_cadastramento' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'tipo_documento' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'emissao_boleto' => array(
            'tamanho' => 1,
            'default' => '2',
            'tipo' => 'int',
            'required' => true),
        'identificacao_distribuicao' => array(
            'tamanho' => 1,
            'default' => '2',
            'tipo' => 'int',
            'required' => true),
        'numero_documento' => array(
            'tamanho' => 15,
            'default' => ' ',
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
        'agencia_cobradora' => array(
            'tamanho' => 5,
            'default' => '00000',
            'tipo' => 'alfa',
            'required' => true),
        'agencia_cobradora_dv' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'especie_titulo' => array(
            'tamanho' => 2,
            'default' => '02',
            'tipo' => 'int',
            'required' => true),
        'aceite' => array(
            'tamanho' => 1,
            'default' => 'N',
            'tipo' => 'alfa',
            'required' => true),
        'data_emissao' => array(
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'date',
            'required' => true),
        'codigo_mora' => array(
            'tamanho' => 1,
            'default' => '3',
            'tipo' => 'alfa',
            'required' => true),
        'data_mora_juros' => array(
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'date',
            'required' => true),
        'vlr_juros' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'codigo_desconto' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'data_desconto' => array(
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'date',
            'required' => true),
        'vlr_desconto' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'vlr_IOF' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'vlr_abatimento' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        'seu_numero' => array(
            'tamanho' => 25,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'protestar' => array(
            'tamanho' => 1,
            'default' => '3',
            'tipo' => 'alfa',
            'required' => true),
        'prazo_protesto' => array(
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'baixar' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        'prazo_baixar' => array(
            'tamanho' => 3,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        'codigo_moeda' => array(
            'tamanho' => 2,
            'default' => '09',
            'tipo' => 'int',
            'required' => true),
        'filler4' => array(
            'tamanho' => 11,
            'default' => '00000000000',
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
        $class = 'CnabPHP\resources\\B' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro3Q';
        $this->children[] = new $class($data);

        if (isset($data['codigo_desconto2']) ||
            isset($data['codigo_desconto3']) ||
            (isset($data['vlr_multa']) && $data['vlr_multa'] > 0))
        {
            $class = 'CnabPHP\resources\\B' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro3R';
            $this->children[] = new $class($data);
        }
    }

    protected function set_nosso_numero($value)
    {
        $carteira    = isset($this->entryData['codigo_carteira']) ? $this->entryData['codigo_carteira'] : '';
        $nossoNumero = preg_replace('/\D/', '', $value);
        $digito      = self::calcularDigitoVerificador($carteira . $nossoNumero);

        $this->data['nosso_numero'] = str_pad($nossoNumero . $digito, 12, '0', STR_PAD_LEFT);
    }

    protected function set_especie_titulo($value)
    {
        if (is_int($value))
        {
            $this->data['especie_titulo'] = $value;
            return;
        }

        $especies = array(
            'CH'  => '01',
            'DM'  => '02',
            'DMI' => '02',
            'DS'  => '04',
            'DSI' => '04',
            'DR'  => '06',
            'LC'  => '07',
            'NP'  => '12',
            'RC'  => '17',
            'ND'  => '19',
            'BDP' => '32',
        );

        $this->data['especie_titulo'] = isset($especies[$value]) ? $especies[$value] : '99';
    }

    protected static function calcularDigitoVerificador($documento)
    {
        $pesos = array(2, 3, 4, 5, 6, 7);
        $soma  = 0;
        $index = 0;

        for ($i = strlen($documento) - 1; $i >= 0; $i--)
        {
            $soma += intval($documento[$i]) * $pesos[$index % 6];
            $index++;
        }

        $resto = $soma % 11;

        if ($resto == 0)
        {
            return '0';
        }

        if ($resto == 1)
        {
            return 'P';
        }

        return (string) (11 - $resto);
    }
}
