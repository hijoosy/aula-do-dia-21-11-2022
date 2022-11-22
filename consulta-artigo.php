<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta de artigo</title>
    <link rel="stylesheet" href="./estilo.css"/>
</head>
<body>
    <h1>Artigos<h1>
    <hr>
    <?php
    include_once'conexao.php';
    $sql= "select * from artigo";
    $result= mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result)){
        ?>
    <div class="conteudoartigo">
        <h4>Título:</h4>
        <?php echo $row["titulo"] ?> </h4>
        <h4> Autor: 
        <?php echo $row["autor"] ?> </h4>
        <img src="./uploads/ <?php echo $row["foto"]; ?> "/>
        <?php echo substr($row["artigo"],0,30)."...";?>
    </div>

        <?php
    }

    ?>


</body>
</html>