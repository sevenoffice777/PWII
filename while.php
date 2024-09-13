<?php include "cabecalho.php"; ?>
<h1> laço de repetição while </h1>
<p> o laço de repetição while necessita de 3 itens para se tornar um loop </p>
<ol>
    <li> Variavel controladora </li>
    <li> condição de continuação </li>
    <li> incremento de variavel contoroladora </li>
</ol>
<pre> 
    $i=0; //Declaração de variavel controladora 
    while ( $i < 10)
    {
        //executo esse bloco de codigo 

        /incrementando a variavel de controle 
        $i = $i + 1;
        $i++;
        $i += 1;
        
    }
</pre>
<p> A declaração do while obrigatoriamente executa uma vez no minimo o bloco do codigo </p>
<pre>
    $i = 0; 
    do{
        $i++;

    }while($i < 10);
</pre>
exemplo:
<?php
$i = 1;
while($i < 20)
{
    echo "<h1> $i ° h1 </h1>";
    $i++;
}
?>

<p>Outra forma de implementação é: </p>
<?php
$i = 1;
do{
    ?>
    <h2> HTML NORMAL </h2>
    <p> <?php echo $i ; ?> </p>
    <?php
    $i++;
        }while($i < 5);  
  ?>
    }
    <?php include "rodape.php"; ?>