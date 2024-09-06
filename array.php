<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA INICIAL DO SITE</title>
    <link href="bootstrap.css" rel="stylesheet" />
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">AULA PWII</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Pagina inicial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="variavel.php">variavel.php</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="if.php">if</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="while.php">while</a></li>
            <li><a class="dropdown-item" href="for.php">for</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="foreach.php">Foreach</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bootstrap.php">"Bootstrap"</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="array.php">
            Array
</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div class="container">                 
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
</div>
    <script src="bootstrap.bundle.min.js"> </script>
</body>
</html>