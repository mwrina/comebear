<?php

include_once('connect.php');

//GET 

$nome = '';

if(!empty ($_POST['nome'])){
    $nome = $_POST['nome'];
}

if(!empty ($_POST['nome_pedido'])){
    $nome_pedido = $_POST['nome_pedido'];
}

$sql1 = "SELECT * FROM usuario WHERE nome_usuario = '$nome'";
$result1 = mysqli_query($conn, $sql1);

if(mysqli_num_rows($result1) > 0){
    while($row1 = mysqli_fetch_assoc($result1)) {
        $cpf_usu = $row1["cpf_usuario"];
    }
}

//GET NOME_PEDIDO

$strhtml = '<div id="nome_pedido">
            <h3>Combo Feng Cheng</h3>
            <h5>2 djow salmão, 4 niguiri de salmão, 8 uramaki filadélfia, 8 hot filadélfia.</h5>
            </div>';

$doc = new DOMDocument();
$doc->loadHTML( $strhtml );
$xpath=new DOMXPath( $doc );
$col=$xpath->query('//div[@id="nome_pedido"]/h3');

if( $col ){
    /* You could store results from query in an array */
    $tags=array();
    foreach( $col as $node ) {

        /* Add tags to array - a rethink would be required if there are multiple h2 and h3 tags! */
        $tags[ $node->tagName ]=$node->nodeValue;

    }
}

$nome_pedido = $tags['h3'];




?>