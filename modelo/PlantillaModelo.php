<?php

declare(strict_types=1);
class PlantillaModelo extends BaseLibreria
{
   private int $id;
   private string $titulo;
   private string $icono;
   private string $logo;
   private string $rutaDominio;
   private string $rutaContenidos;
   private string $rutaCss;
   private string $rutaJs;
   private string $rutaImgBanners;
   private string $rutaImgGenerales;
   private string $rutaImgUsrs;
   private string $rutaPlugins;
   private $consultas;

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
   protected function insertarRegistroModelo(): bool
   {
      $this->id = $this->getAtributoModelo('id');
      $this->consultas = $this->conectar()->prepare(
         "INSERT INTO modelo (id) VALUES (:id)"
      );
      $this->consultas->bindParam(':id', $this->id, PDO::PARAM_STR);
      if ($this->consultas->execute()) {
         $this->conexion = null;
         return true;
      } else {
         $this->conexion = null;
         return false;
      }
   }
   protected function eliminarRegistroModelo(): bool
   {
      $this->id = $this->getAtributoModelo('id');
      $this->consultas = $this->conectar()->prepare(
         "DELETE FROM modelo WHERE id = :valor"
      );
      $this->consultas->bindParam(':id', $this->id, PDO::PARAM_STR);
      if ($this->consultas->execute()) {
         $this->conexion = null;
         return true;
      } else {
         $this->conexion = null;
         return false;
      }
   }
   protected function modificaRegistroModelo(): bool
   {
      $this->id = $this->getAtributoModelo('id');
      $this->consultas = $this->conectar()->prepare(
         "UPDATE tabla SET campo1='modificación', campo2='modificacion', campo3='modificacion' WHERE id = :valor"
      );
      $this->consultas->bindParam(':id', $this->id, PDO::PARAM_STR);
      if ($this->consultas->execute()) {
         $this->conexion = null;
         return true;
      } else {
         $this->conexion = null;
         return false;
      }
   }
   protected function getElementosModelo(): bool
   {
      $this->titulo = "Sitio";
      $this->icono = "";
      $this->logo = "";
      return true;
   }
   protected function getRutasModelo(): bool
   {
      /**
       * Aquí debe llevarse a cabo una consulta a la
       * base de datos para obtener la información
       */
      $this->rutaDominio = "http://localhost/sitio/";
      $this->rutaContenidos = $this->rutaDominio . "vista/contenidos/";
      $this->rutaCss = $this->rutaDominio . "vista/css/";
      $this->rutaJs = $this->rutaDominio . "vista/js/";
      $this->rutaImgBanners = $this->rutaDominio . "vista/img/banners/";
      $this->rutaImgGenerales = $this->rutaDominio . "vista/img/generales/";
      $this->rutaImgUsrs = $this->rutaDominio . "vista/img/usrs/";
      $this->rutaPlugins = $this->rutaDominio . "vista/img/plugins/";
      return true;
   }
}
