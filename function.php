<h1>Funções nativas </h1>
<p> Funções nativas são fuções que o poprio php 
    nos fornece. como por exemplo:
        a função isset(),//verifica se existe a variavel 
        a função empty(), //Verifica se a variavel está vazia 
        a função count(), //conta quantos itens tem no array 
        a função include"", //inclui um arquivo dentro do outros 
        a função echo "", //imprime na tela 
        a função strlen(), //conta quantos caracteres tem uma string
        a função explode(),// cria um array a partir de uma frase 
        a função replace(), //troca de caracteres dentro de uma string 
        
        
        <?php
        echo "<h1>";
        echo date("H:i:s");
        echo "</h1>";
        ?>
        Ano - mes - dia
<?php
    echo "<h1>";
    echo date("Y-m-d");
    echo "</h1>";
    ?>
    <?php
    echo "<pre>";
    print_r( getdate() );
    echo "</pre>";
    ?>
    <?php
echo rand(), "\n";
echo rand(), "\n";

echo rand(1, 1), "\n";
?>

<h1>Funções Personalizadas </h1>