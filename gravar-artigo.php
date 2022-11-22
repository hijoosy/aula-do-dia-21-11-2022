<?php

// pegar os dados da tela
$titulo =$_POST["titulo"];
$autor =$_POST["autor"];
$artigo =$_POST["artigo"];
$foto =$_FILES["foto"];

//echo var_dump($foto);
            // 0            1
// foto  [nome da foto] [extenção]
//            |             |
    //     [flores]     [amarelas]

$ext = explode(".",$foto["name"]);//[foto][nome][ext]
$ext = array_reverse($ext);//[amarelas][flores]
$ext = $ext[0];



if(($ext != "jpg") && ($exr != "png") && ($ext !="gif")){
    echo "Arquivo Inválido";
}elseif($foto ["size"] < 1024 *8){
     echo "Tamanho excedido";
}else{
    
    include_once'conexao.php';

    //montar a instrução para gravar o artigo no banco de dados
    $nomefoto= date("YmdHis").rand(0000,9999).".".$ext;
    //20221122134800.png
    $sql = "insert into artigo values(null,'".$titulo."','".$autor."','".$artigo."','".$nomefoto."')";
}
if(mysqli_query($con,$sql)) {
    echo "Gravado com sucesso!";

    //mover a imagem para dentro da pasta que esta no nosso projeto
    move_uploaded_file($foto["tmp_name"],"./uploads/.".$nomefoto);
}else{
    echo "erro ao gravar.";
}

mysqli_close($con);








?>