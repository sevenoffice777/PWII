<?php include "cabecalho.php"; ?>

<div class="container">                 
  <h1>Variaveis em PHP </h1>
  <p> $numero =10; </p>
  <p> $string = "Rafael camisa 10"; </p>   
  <p> $string2 = "Rafael camisa ".$numero; </p>
  <p> $ValorDecimal = 10.50 </p>
  <p> $Ativo = true; </p>
  <?php // Aqui é um bloco de comentario ?>
  <?php
     echo "Hello word";
     echo "<cbr>";
     $numero = 10;
     $nome = "Rafael";
     $frase1 = "<p> $nome camisa $numero frase com paragrafo </p>";
     $frase = $nome." camisa ".$numero;// concatenação das antigas
     echo $frase1;
     echo "$frase É oque tem dentro da variavel"; 
     ?>
<?php include "rodape.php"; ?>