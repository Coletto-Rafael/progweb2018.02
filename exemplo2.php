<?php
$nome = "Rafael";
function getNome(){
    global $nome;
    echo $nome;
}
getNome();
?>