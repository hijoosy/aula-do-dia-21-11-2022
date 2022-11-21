<?php

// pegar os dados da tela
$titulo =$_POST["titulo"];
$autor =$_POST["autor"];
$artigo =$_POST["artigo"];
$foto =$_POST["foto"];

//echo var_dump($foto);
            // 0            1
// foto  [nome da foto] [extenção]
//            |             |
    //     [flores]     [amarelas]

$ext = explode(".",$foto["name"]);//[foto][nome][ext]
$ext = array_reverse($ext);//[amarelas][flores]
$ext = $ext[0];



if(($ext != "jpg") && ($exr != "png") &&  ($ext !="gif") ){
    echo "Arquivo Inválido";
}elseif($foto ["size"] < 1024 *20){
     echo "Tamanho excedido";
}else{
    //vamos para o banco
    $con = mysqli_connect("localhost","root","","artigo");
}









?>