<?php include "cabecalho.php"; ?>    
<h1> estrutura condicional (IF ELSE)</h1>
<p>$inteira = 10 </p>
<p>$nome = "Prof" </p>
<p>$valor = 10.50 </p>
<p>$ativo = true </p>
   <pre>
   <p> if($inteira == 10)
    {
         echo "o conteudo é 10";
    }
    else if ($inteira >= 11)
    {
          echo "não é 10";
    }
</pre>
<?php
$inteira = 9;
  if($inteira == 10)
  {
      echo "A variavel é 10";
  }

  else if($inteira >=11) 
{
    echo "A variavel é maior ou igual a 11";
}
    else
{
echo "A variavel só pode ser menor que 10";
}




  ?>
<p>
    AS variaveis String podem ser contados os caracteres e usados no if 
</p>
<pre> 
    if( count ($nome) > 10)
    {
        echo "seu nome tem mais que 10 caracteres quantidade é ".count ($nome)";
    }
    <p> Podemos verificar se a variavel $nome está vazia 
</p>
<pre>
        <?php
    $nome ="Rafael";
    if( strlen($nome) > 5)
        
        {
        echo "<h2>seu nome tem mais que 10 caracteres quantidade é ".strlen ($nome)."</h2>";
        
        } ?>
        </pre>
    <p>
        Também podemos comprar string normalmente 
    </p>
    <pre>
        if($nome == "Rafael")
        {
            echo "nome igual";
        }
        else
        {
            echo "Nomes diferentes"; 
        }
    </pre>
    <p>
        Podemos verificar se a variavel é verdadeira ou falsa 
    </p>
    <pre>

    <?php include "rodape.php"; ?>