<!DOCTYPE html>
<html>
<head>
<title>Calculadora Básica</title>
<style>
       body {
           font-family: Arial, sans-serif;
       }
       .calculator {
           width: 250px;
           margin: 50px auto;
           border: 1px solid #ccc;
           padding: 10px;
           border-radius: 5px;
       }
       input[type="text"] {
           width: 100%;
           margin-bottom: 10px;
           padding: 5px;
       }
       input[type="button"] {
           width: 50px;
           height: 50px;
           margin: 5px;
           font-size: 18px;
       }
</style>
</head>
<body>
<div class="calculator">
<form method="post" action="">
<input type="text" name="num1" placeholder="Número 1" required><br>
<input type="text" name="num2" placeholder="Número 2" required><br>
<input type="submit" name="operation" value="+" />
<input type="submit" name="operation" value="-" />
<input type="submit" name="operation" value="*" />
<input type="submit" name="operation" value="/" /><br>
</form>
<br>
<?php
   if(isset($_POST['operation'])) {
       $num1 = $_POST['num1'];
       $num2 = $_POST['num2'];
       $operation = $_POST['operation'];
       switch($operation) {
           case '+':
               $result = $num1 + $num2;
               break;
           case '-':
               $result = $num1 - $num2;
               break;
           case '*':
               $result = $num1 * $num2;
               break;
           case '/':
               if($num2 != 0) {
                   $result = $num1 / $num2;
               } else {
                   $result = "Erro: Divisão por zero";
               }
               break;
           default:
               $result = "Operação inválida";
       }
       echo "Resultado: " . $result;
   }
   ?>
</div>
</body>
</html>
