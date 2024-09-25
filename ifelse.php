<?php
include 'includes/header.php';

echo "<h2>Exemplo de utilização de IF / ELSE</h2>";

echo '<a href="index.php"><button>Voltar</button></a>';

$idade = $_POST['idade'];
//if(condição){
//      trecho de código para executar, caso a condição seja atendida.
//}else{
//      trecho de código para executar, caso nenhuma condição seja atendida.
//}
if ($idade < 18) {
    echo "Com {$idade} anos, você é considerado menor de idade!";
} else if ($idade < 60) {
    echo "Com {$idade} anos, você é maior de idade!";
} else {
    echo "Com {$idade} anos, você já é classificado como idoso!";
}
include 'includes/footer.php';
