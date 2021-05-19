<?php
class PlantillaModelo extends BaseLibreria
{
   private $id;
   private $logo;
   private $icono;
   private $titulo;
   private $descripcion;
   private $palabrasClave;
   private $rutaDominio;
   private $rutaContenidos;
   private $rutaCss;
   private $rutaJs;
   private $rutaImgBanners;
   private $rutaImgGenerales;
   private $rutaImgUsrs;
   private $rutaPlugins;
   private $resultado;
   private $consultas;
   private $datos_consulta;
   protected function __construct()
   {
   }
   protected function getAtributoModelo($atributo)
   {
      return $this->$atributo;
   }
   protected function setAtributoModelo($atributo, $valor)
   {
      $this->$atributo = $valor;
   }
   protected function insertar_registro_modelo()
   {
      $this->id = $this->getAtributoModelo('id');
      $this->consultas = $this->conectar()->prepare(
         "INSERT INTO modelo (id) VALUES (:id)"
      );
      $this->consultas->bindParam(':id', $this->id, PDO::PARAM_STR);
      if ($this->consultas->execute()) {
         $this->resultado = true;
      } else {
         $this->resultado =  false;
      }
      $this->conexion = null;
      return $this->resultado;
   }
   protected function eliminar_registro_modelo()
   {
      $this->id = $this->getAtributoModelo('id');
      $this->consultas = $this->conectar()->prepare(
         "DELETE FROM modelo WHERE id = :valor"
      );
      $this->consultas->bindParam(':id', $this->id, PDO::PARAM_STR);
      if ($this->consultas->execute()) {
         $this->conexion = null;
         $this->resultado = true;
      } else {
         $this->resultado =  false;
      }
      $this->conexion = null;
      return $this->resultado;
   }
   protected function modifica_registro_modelo()
   {
      $this->id = $this->getAtributoModelo('id');
      $this->consultas = $this->conectar()->prepare(
         "UPDATE tabla SET campo1='modificación', campo2='modificacion', campo3='modificacion' WHERE id = :valor"
      );
      $this->consultas->bindParam(':id', $this->id, PDO::PARAM_STR);
      if ($this->consultas->execute()) {
         $this->resultado = true;
      } else {
         $this->resultado =  false;
      }
      $this->conexion = null;
      return $this->resultado;
   }
   protected function getRutasModelo()
   {
      $this->rutaDominio = "http://localhost/sitio/";
      $this->rutaContenidos = "vista/contenidos/";
      $this->rutaCss = $this->rutaDominio . "vista/css/";
      $this->rutaJs = $this->rutaDominio . "vista/js/";
      $this->rutaImgBanners = $this->rutaDominio . "vista/img/banners/";
      $this->rutaImgGenerales = $this->rutaDominio . "vista/img/generales/";
      $this->rutaImgUsrs = $this->rutaDominio . "vista/img/Usrs/";
      $this->rutaPlugins = $this->rutaDominio . "vista/plugins/";
      return true;
   }
   protected function getElementosModelo()
   {
      $this->logo = "";
      $this->icono = "";
      $this->titulo = "Sitio";
      $this->descripcion = "Este es un sitio para la administración de contenidos.";
      $this->palabrasClave = "CMS,Administración,Contenido,Management,Content";
      return true;
   }
}
