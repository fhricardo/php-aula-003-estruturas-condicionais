<?php
include 'includes/header.php';

$food = $_POST['comidas'];

echo '<a href="index.php"><button>Voltar</button></a>';

/*switch(valor){
    caso "valor 1":
        trecho de código a executar;
        break;
    caso "valor 2":
        trecho de código a executar;
        break;
    default:
        trecho de código para executar por padrão, caso os valores não sejam encontrados;
        break;
}*/

switch ($food) {
    case 'hamburguer':
        echo "<p><strong>Hambúrguer: </strong>Um clássico do fast food, geralmente composto por um pão com carne moída grelhada, queijo, alface, tomate, picles e molhos variados.</p>";
        echo '<div class="img"><img src="assets/' . $food . '.webp" alt=""></div>';
        break;
    case 'pizza':
        echo "<p><strong>Pizza: </strong>Uma massa assada coberta com molho de tomate, queijo e uma variedade de ingredientes como pepperoni, cogumelos, pimentões e azeitonas.</p>";
        echo '<div class="img"><img src="assets/' . $food . '.webp" alt=""></div>';
        break;
    case 'hotdog':
        echo "<p><strong>Hot-Dog: </strong>Um pão alongado recheado com uma salsicha, que pode ser acompanhada por ketchup, mostarda, maionese, picles, cebola e outros condimentos.</p>";
        echo '<div class="img"><img src="assets/' . $food . '.webp" alt=""></div>';
        break;
    case 'fries':
        echo "<p><strong>Batata Frita: </strong>Fatias de batata fritas em óleo quente até ficarem crocantes e douradas, geralmente servidas com sal e acompanhamentos como ketchup ou maionese.</p>";
        echo '<div class="img"><img src="assets/' . $food . '.webp" alt=""></div>';
        break;
    case 'chicken':
        echo "<p><strong>Frango Frito: </strong>Pedaços de frango empanados e fritos até ficarem crocantes por fora e suculentos por dentro, muitas vezes servidos com molhos variados.</p>";
        echo '<div class="img"><img src="assets/' . $food . '.webp" alt=""></div>';
        break;
    case 'donuts':
        echo "<p><strong>Donuts: </strong>Rosquinhas doces fritas, geralmente cobertas com açúcar, glacê ou recheios variados, como creme ou geleia.</p>";
        echo '<div class="img"><img src="assets/' . $food . '.webp" alt=""></div>';
        break;
    default:
        echo "<p>Parece que {$food} não é uma comida!</p>";
        break;
}

include 'includes/footer.php';
