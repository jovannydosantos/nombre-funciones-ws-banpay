<?php

namespace Libs\FunctionsName;
use SoapClient;

class Names 
{
    public function getFunctionsName($url)
    {
        $funciones_array = [];
        $url = $url;

        try {
            $client = new SoapClient($url);

            foreach ($client->__getFunctions() as $key => $funcion) {
                $secciones1 = explode(" ", $funcion);
                $secciones2 = explode("(", $secciones1[1]);
                $funciones_array[$key] = $secciones2[0];
            }

            return (object) $funciones_array;

        } catch (SoapFault $e) {
             echo $e->getMessage();
        }
    }
}