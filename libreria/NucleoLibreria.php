<?php
// "https://mvcfrw.fgh-online.com/";
class NucleoLibreria
{
    private $prefijo;
    public function __construct($parametros = "")
    {
        if ($parametros == "Ajax") {
            $this->prefijo = "../";
        } else {
            $this->prefijo = "./";
        }

        spl_autoload_register(function ($clase) {
            if (substr($clase, -6) == 'Modelo') {

                require_once($this->prefijo . 'modelo/' . $clase . ".php");
            } else if (substr($clase, -8) == 'Libreria') {
                require_once($this->prefijo . './libreria/' . $clase . ".php");
            } else {
                require_once($this->prefijo . './controlador/' . $clase . ".php");
            }
        });
        $this->getControlador();
    }
    public function getControlador()
    {
        $controladorNombre = "Inicio";
        $metodo = "inicio";
        $parametros = "";
        if (isset($_GET['url'])) {
            $url = trim($_GET['url']);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            if (file_exists("./controlador/" . ucwords($url[0]) . ".php")) {
                $controladorNombre = ucwords($url[0]);
                $controlador = new $controladorNombre;
                if (isset($url[1]) && !empty(trim($url[1]))) {
                    if (method_exists($controlador, $url[1])) {
                        $metodo = $url[1];
                        if (isset($url[2]) && !empty(trim($url[2]))) {
                            for ($i = 2; $i < count($url); $i++) {
                                $parametros .= $url[$i] . ',';
                            }
                            $parametros = explode(",", trim($parametros, ','));
                            $parametros = $parametros;
                        }
                    }
                }
            }
        }
        session_start();
        $controlador = new $controladorNombre;
        $controlador->{$metodo}($parametros);
        $plantilla = new Plantilla();
        include_once "vista/" . $plantilla->getAtributo("vista");
    }
}
