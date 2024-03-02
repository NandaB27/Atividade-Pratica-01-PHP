<?php 

echo "Exercício 1" . PHP_EOL;
echo "</br>";
echo "</br>";


$media = array();

$nota = array();

function media($numero1, $numero2) {
    global $media;
    $resultado = ($numero1 + $numero2)/2;
    array_push($media, $resultado);
    echo "O resultado foi : $resultado";

    if ($resultado < 6) {
        $aprovado = "false";
        array_push($media, $aprovado);
        echo "</br>";
        echo "Aluno foi reprovado" . PHP_EOL;
    } else {
        $aprovado = "true";
        array_push($media, $aprovado);
        echo "</br>";
        echo "Aluno foi aprovado" . PHP_EOL;
    }
}

media(6,5);
echo "</br>";
echo "</br>";

echo "Exercício 2";
echo "</br>";
echo "</br>";
echo "Cálculo 3 notas";
echo "</br>";
echo "</br>";
function notas($nota1 , $peso1 , $nota2 , $peso2 , $nota3 , $peso3) {
    global $nota;
    $resultado = (($nota1*$peso1) + ($nota2*$peso2) + ($nota3*$peso3))/3;
    array_push($nota, $resultado);
    echo "O resultado é $resultado";
}

notas(8,10,7,8,10,15);
echo "</br>";
echo "</br>";
echo "Cálculo 2 notas";
echo "</br>";
echo "</br>";
function notas2($nota1, $peso1, $nota2, $peso2) {
    global $nota;
    $resultado = (($nota1*$peso1) + ($nota2*$peso2))/2;
    array_push($nota, $resultado);
    echo "O resultado é $resultado";
}

notas2(8,10,9,10);
echo "</br>";
echo "</br>";
echo "Exercício 3";
echo "</br>";
echo "</br>";

$listaItens = array();

function cadastrarItens($tipodoItem, $precodoItem) {
    global $listaItens;
    array_push($listaItens, array(
        'tipo' => $tipodoItem,
        'preço' => $precodoItem
    ));
}

function listarItens(){
    global $listaItens;
    echo "<h1>Lista de itens</h1>";
    foreach($listaItens as $key => $value) {
        echo "</br>";
        echo "<h2> Item:" .$value['tipo']. "</h2>";
        echo "<h2> Preço: R$" .$value['preço']. "</h2>";
        echo "<hr>";
        echo "</br>";
    }
}

cadastrarItens("Camiseta",20);
cadastrarItens("Saia",45);
cadastrarItens("Mochila",60);

function excluirItem($tipo){
    global $listaItens;

    foreach($listaItens as $key => $value) {
        if ($value['tipo']  == $tipo) {
            unset($listaItens[$key]);
        }
    }
}

var_dump($listaItens);

excluirItem("Camiseta");
listarItens();
