<?php
class PlantillaModelo extends BaseLibreria
{
   private $titulo;
   private $icono;
   private $logo;
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
   protected function insertar_registro_modelo()
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
   protected function eliminar_registro_modelo()
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
   protected function modifica_registro_modelo()
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
   protected function getElementosModelo()
   {
      $this->titulo = "Sitio";
      $this->icono = "";
      $this->logo = "";
      return true;
   }
}
