<?php
    /*
    //echo "Boa noite";
    $con = mysqli_connect(
        "localhost",
        "root",
        "123456",
        "syspacientes");
    if(!$con){
        echo "Error: ".PHP.EOL;
        exit;
    }
    echo "Conectou";
    echo "<br>";
    echo "Informacao do host: ". mysqli_get_host_info($con);
    mysqli_close($con);  
    */

    $nome = $_GET["nome"]="";
    echo "O nome e: ".$nome;
?>

