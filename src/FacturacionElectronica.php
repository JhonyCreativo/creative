<?php

namespace Jhonycreativo\Creative;

use Illuminate\Support\Collection;

class FacturacionElectronica
{

    public $operacion = "generar_comprobante";
    public $tipo_de_comprobante               = "1";
    public $serie                             = "FFF1";
    public $numero                = "1";
    public $sunat_transaction            = "1";
    public $cliente_tipo_de_documento        = "6";
    public $cliente_numero_de_documento    = "";
    public $cliente_denominacion              = "";
    public $cliente_direccion                 = "";
    public $cliente_email                     = "";
    public $cliente_email_1                   = "";
    public $cliente_email_2                   = "";
    public $fecha_de_emision                  = "";
    public $fecha_de_vencimiento              = "";
    public $moneda                            = "1";
    public $tipo_de_cambio                    = "";
    public $porcentaje_de_igv                 = "18.00";
    public $descuento_global                  = "";
    public $total_descuento                   = "";
    public $total_anticipo                    = "";
    public $total_gravada                     = "";
    public $total_inafecta                    = "";
    public $total_exonerada                   = "";
    public $total_igv                         = "";
    public $total_gratuita                    = "";
    public $total_otros_cargos                = "";
    public $total                             = "";
    public $percepcion_tipo                   = "";
    public $percepcion_base_imponible         = "";
    public $total_percepcion                  = "";
    public $total_incluido_percepcion         = "";
    public $detraccion                        = "false";
    public $observaciones                     = "";
    public $documento_que_se_modifica_tipo    = "";
    public $documento_que_se_modifica_serie   = "";
    public $documento_que_se_modifica_numero  = "";
    public $tipo_de_nota_de_credito           = "";
    public $tipo_de_nota_de_debito            = "";
    public $enviar_automaticamente_a_la_sunat = "true";
    public $enviar_automaticamente_al_cliente = "false";
    public $codigo_unico                      = "";
    public $condiciones_de_pago               = "";
    public $medio_de_pago                     = "";
    public $placa_vehiculo                    = "";
    public $orden_compra_servicio             = "";
    public $tabla_personalizada_codigo        = "";
    public $formato_de_pdf                    = "";
    public $ruta                              = "";
    public $token                             = "";
    public $items                             = array([]);


    public function __construct($ruta = null, $token = null)
    {
        $this->ruta = $ruta;
        $this->token = $token;
    }
    public function set_operacion($val)
    {
        $this->operacion = $val;
    }
    public function set_tipo_de_comprobante($val)
    {
        $this->tipo_de_comprobante = $val;
    }
    public function set_serie($val)
    {
        $this->serie = $val;
    }
    public function set_numero($val)
    {
        $this->numero = $val;
    }
    public function set_sunat_transaction($val)
    {
        $this->sunat_transaction = $val;
    }
    public function set_cliente_tipo_de_documento($val)
    {
        $this->cliente_tipo_de_documento = $val;
    }
    public function set_cliente_numero_de_documento($val)
    {
        $this->cliente_numero_de_documento = $val;
    }
    public function set_cliente_denominacion($val)
    {
        $this->cliente_denominacion = $val;
    }
    public function set_cliente_direccion($val)
    {
        $this->cliente_direccion = $val;
    }
    public function set_cliente_email($val)
    {
        $this->cliente_email = $val;
    }
    public function set_cliente_email_1($val)
    {
        $this->cliente_email_1 = $val;
    }
    public function set_cliente_email_2($val)
    {
        $this->cliente_email_2 = $val;
    }
    public function set_fecha_de_emision($val)
    {
        $this->fecha_de_emision = $val;
    }
    public function set_fecha_de_vencimiento($val)
    {
        $this->fecha_de_vencimiento = $val;
    }
    public function set_moneda($val)
    {
        $this->moneda = $val;
    }
    public function set_tipo_de_cambio($val)
    {
        $this->tipo_de_cambio = $val;
    }
    public function set_porcentaje_de_igv($val)
    {
        $this->porcentaje_de_igv = $val;
    }
    public function set_descuento_global($val)
    {
        $this->descuento_global = $val;
    }
    public function set_total_descuento($val)
    {
        $this->total_descuento = $val;
    }
    public function set_total_anticipo($val)
    {
        $this->total_anticipo = $val;
    }
    public function set_total_gravada($val)
    {
        $this->total_gravada = $val;
    }
    public function set_total_inafecta($val)
    {
        $this->total_inafecta = $val;
    }
    public function set_total_exonerada($val)
    {
        $this->total_exonerada = $val;
    }
    public function set_total_igv($val)
    {
        $this->total_igv = $val;
    }
    public function set_total_gratuita($val)
    {
        $this->total_gratuita = $val;
    }
    public function set_total_otros_cargos($val)
    {
        $this->total_otros_cargos = $val;
    }
    public function set_total($val)
    {
        $this->total = $val;
    }
    public function set_percepcion_tipo($val)
    {
        $this->percepcion_tipo = $val;
    }
    public function set_percepcion_base_imponible($val)
    {
        $this->percepcion_base_imponible = $val;
    }
    public function set_total_percepcion($val)
    {
        $this->total_percepcion = $val;
    }
    public function set_total_incluido_percepcion($val)
    {
        $this->total_incluido_percepcion = $val;
    }
    public function set_detraccion($val)
    {
        $this->detraccion = $val;
    }
    public function set_observaciones($val)
    {
        $this->observaciones = $val;
    }
    public function set_documento_que_se_modifica_tipo($val)
    {
        $this->documento_que_se_modifica_tipo = $val;
    }
    public function set_documento_que_se_modifica_serie($val)
    {
        $this->documento_que_se_modifica_serie = $val;
    }
    public function set_documento_que_se_modifica_numero($val)
    {
        $this->documento_que_se_modifica_numero = $val;
    }
    public function set_tipo_de_nota_de_credito($val)
    {
        $this->tipo_de_nota_de_credito = $val;
    }
    public function set_tipo_de_nota_de_debito($val)
    {
        $this->tipo_de_nota_de_debito = $val;
    }
    public function set_enviar_automaticamente_a_la_sunat($val)
    {
        $this->enviar_automaticamente_a_la_sunat = $val;
    }
    public function set_enviar_automaticamente_al_cliente($val)
    {
        $this->enviar_automaticamente_al_cliente = $val;
    }
    public function set_codigo_unico($val)
    {
        $this->codigo_unico = $val;
    }
    public function set_condiciones_de_pago($val)
    {
        $this->condiciones_de_pago = $val;
    }
    public function set_medio_de_pago($val)
    {
        $this->medio_de_pago = $val;
    }
    public function set_placa_vehiculo($val)
    {
        $this->placa_vehiculo = $val;
    }
    public function set_orden_compra_servicio($val)
    {
        $this->orden_compra_servicio = $val;
    }
    public function set_tabla_personalizada_codigo($val)
    {
        $this->tabla_personalizada_codigo = $val;
    }
    public function set_formato_de_pdf($val)
    {
        $this->formato_de_pdf = $val;
    }
    public function set_items($val=array())
    {
        $this->items = $val;
    }

    public function emitir()
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->ruta);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Authorization: Token token="' . $this->token . '"',
                'Content-Type: application/json',
            )
        );
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->formatoComprobante());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $respuesta  = curl_exec($ch);
        curl_close($ch);

        $leer_respuesta = json_decode($respuesta, true);

        return $leer_respuesta;
    }
    public function formatoComprobante()
    {
        $data = array(
            "operacion" => $this->operacion,
            "tipo_de_comprobante" => $this->tipo_de_comprobante,
            "serie" => $this->serie,
            "numero" => $this->numero,
            "sunat_transaction" => $this->sunat_transaction,
            "cliente_tipo_de_documento" => $this->cliente_tipo_de_documento,
            "cliente_numero_de_documento" => $this->cliente_numero_de_documento,
            "cliente_denominacion" => $this->cliente_denominacion,
            "cliente_direccion" => $this->cliente_direccion,
            "cliente_email" => $this->cliente_email,
            "cliente_email_1" => $this->cliente_email_1,
            "cliente_email_2" => $this->cliente_email_2,
            "fecha_de_emision" => date('d-m-Y'),
            "fecha_de_vencimiento" => $this->fecha_de_vencimiento,
            "moneda" => $this->moneda,
            "tipo_de_cambio" => $this->tipo_de_cambio,
            "porcentaje_de_igv" => $this->porcentaje_de_igv,
            "descuento_global" => $this->descuento_global,
            "descuento_global" => $this->descuento_global,
            "total_descuento" => $this->total_descuento,
            "total_anticipo" => $this->total_anticipo,
            "total_gravada" => $this->total_gravada,
            "total_inafecta" => $this->total_inafecta,
            "total_exonerada" => $this->total_exonerada,
            "total_igv" => $this->total_igv,
            "total_gratuita" => $this->total_gratuita,
            "total_otros_cargos" => $this->total_otros_cargos,
            "total" => $this->total,
            "percepcion_tipo" => $this->percepcion_tipo,
            "percepcion_base_imponible" => $this->percepcion_base_imponible,
            "total_percepcion" => $this->total_percepcion,
            "total_incluido_percepcion" => $this->total_incluido_percepcion,
            "detraccion" => $this->detraccion,
            "observaciones" => $this->observaciones,
            "documento_que_se_modifica_tipo" => $this->documento_que_se_modifica_tipo,
            "documento_que_se_modifica_serie" => $this->documento_que_se_modifica_serie,
            "documento_que_se_modifica_numero" => $this->documento_que_se_modifica_numero,
            "tipo_de_nota_de_credito" => $this->tipo_de_nota_de_credito,
            "tipo_de_nota_de_debito" => $this->tipo_de_nota_de_debito,
            "enviar_automaticamente_a_la_sunat" => $this->enviar_automaticamente_a_la_sunat,
            "enviar_automaticamente_al_cliente" => $this->enviar_automaticamente_al_cliente,
            "codigo_unico" => $this->codigo_unico,
            "condiciones_de_pago" => $this->condiciones_de_pago,
            "medio_de_pago" => $this->medio_de_pago,
            "placa_vehiculo" => $this->placa_vehiculo,
            "orden_compra_servicio" => $this->orden_compra_servicio,
            "tabla_personalizada_codigo" => $this->tabla_personalizada_codigo,
            "formato_de_pdf" => $this->formato_de_pdf,
            "items" => $this->items
        );

        $data_json = json_encode($data);
        return $data_json;
    }
}
