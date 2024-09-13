<?php include "cabecalho.php"; ?>
<h1>array</h1>
<p> As variaveis do tipo array são muito utilizadas quando vamos listar coisas.
    os arrays em php sao listas de quaisquer tipos de dados.
</p>
<pre>
    $array = [];
    $array = Array();
    $array[0] = "OI";
    $array[2] = 10;
    $array["Rafael"] = "Aluno";
    $array[$array[2] = "teste";
</pre>
<?php
$array = Array("Oi",10,"aluno","teste",1.99,true);
echo "<h2>Como saber se deu certo ?</h2> ";
var_dump($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<pre>";
var_dump($array);
echo "</pre>";
for($i = 0; $i <count($array)

?>
<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
)
// utilizando a sintaxe curta
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
echo "<pre>";
print_r($array);
echo "</pre>";

$resultados = [
    "Id" => 1,
    "Nome" => "Fernando",
    "Idade" => 34,
    "Salario" => 5325.50,
    "Professor" => true
];
echo "<pre>";
print_r($resultados);
echo "</pre>";
?>
<?php include "rodape.php"; ?>
