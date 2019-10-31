<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function sla(){
        return "<br>Sei Lá<br>";
    }

    public function teste()
    {
        $teste = $_GET['texto'];
        return $teste;
    }

    public function potencia()
    {
        $valor = $_GET['valor'];
        return "<center><h1>".$valor*$valor."</h1></center>";
    }

    public function numero(){
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        $resultado = $numero1+$numero2;
        return "<center><h1>".$resultado."</h1></center>";
    }

    public function imc(){
        $nome = $_GET['nome'];
        $altura = $_GET['altura'];
        $peso = $_GET['peso'];
        $idade = $_GET['idade'];
        $sexo = $_GET['sexo'];
        $resultado = $peso/($altura*$altura);
        $resultado = number_format($resultado, 2,'.', '');

        if($sexo == "feminino"){
            $txtSexo = "Feminino";
        }
        else if ($sexo == "masculino"){
            $txtSexo = "Masculino";
        }

        if($resultado < 18.5){
            $imcResultado = "Magreza";
            $grauObesidade = "0";
        }
        else if($resultado >= 18.5 && $resultado <= 24.9){
            $imcResultado = "Normal";
            $grauObesidade = "0";
        }
        else if($resultado >= 25 && $resultado <= 29.9){
            $imcResultado = "Sobrepeso";
            $grauObesidade = "1";
        }
        else if($resultado >= 30 && $resultado <= 39.9){
            $imcResultado = "Obesidade";
            $grauObesidade = "2";
        }
        else if($resultado >= 40){
            $imcResultado = "Obesidade grave";
            $grauObesidade = "3";
        }

        return "<center><h1>$nome - $txtSexo - $idade Anos</h1><br><h1>IMC: $resultado</h1><br><h1>Classificação: $imcResultado</h1><br></center>";
    }
}
