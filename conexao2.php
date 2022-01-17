<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "tblprecos";

$con = mysqli_connect($servidor,$usuario,$senha,$bd);

if(!$con){
    echo "não conectou ao bd";
}
