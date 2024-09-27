<?php include "cabecalho.php"; ?>
<?php
if(isset ($_POST["Nome"]))
{                      
    if(empty($_POST ["Nome"]) && )
    {
    echo "<div class= 'alert alert-danger'>
    campo nome não pode estar em branco 
    </div>";
    }
    {                      
        else if(empty($_POST ["Valor"]) && )
        {
        echo "<div class= 'alert alert-danger'>
        campo nome não pode estar em branco 
        </div>";
        }
        {                      
       else if(empty($_POST ["codigo de barras"]) && )
            {
            echo "<div class= 'alert alert-danger'>
            campo nome não pode estar em branco 
            </div>";
            }

    
  }
echo "<pre>";
print_r($_GET);
echo "</pre>";
}
?>
   
<form action="novo_produto.php" method="post">
<label>Nome</label>
<input type="text" name="valor" />
<br>
<label>Valor</label>
<input type="number" name="valor" />
<br>
<label>Código de barras</label>
<input type="text" name="codigobarras" />
<br>
<label>Data de Validade</label>
<input type="date" name="datavalidade" />
<br>
<button type='submit' class='btn btn-succes'>
 Enviar os dados 
</button>
</form>

<?php include "rodape.php"; ?>