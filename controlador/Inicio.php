<?php
class Inicio extends InicioModelo
{
   private $componente;
   private $palabras_claves;
   private $descripcion;
   private $titulo;
   private $datos_palabras_claves;
   private $datos_componentes;
   private $id_sesion;
   private $nombre_usuario;
   private $foto_usuario;
   private $elementos;
   private $rutas;
   private $ruta_dominio;
   private $sesion;
   private $vista;
   public function __construct()
   {
      parent::__construct();
      $this->vista = get_class($this) . ".php";
   }
   public function inicio($parametros)
   {
   }
   public function getAtributo($atributo)
   {
      return $this->$atributo;
   }
   public function setAtributo($atributo, $valor)
   {
      $this->$atributo = $valor;
   }
}
