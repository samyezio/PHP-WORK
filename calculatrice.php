<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULATRICE</title>
</head>
<body>
<?php 
   echo ("<h1>WELCOME TO A SIMPLE CALCULATOR<h1>");
    ?>
   
<form action="calculatrice.php" method="get">
    <p>First number :</p>
    <input type="number" name="num1" required> 
    
    <br>
    <p>Second number :</p>
    <input type="number" name="num2" required> 
   
    <br> 
    <p>Operator :</p>
    <input type="text" name="op" required> 
    <input type="submit" value="Calculate">

</form>
<?php
$result=null;
if(isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["op"]) ){
  $num1 = $_GET["num1"];
  $num2 = $_GET["num2"];
  $op   = $_GET["op"];
}
  ANSWER:
  try{
  switch($op){
    case "+":
        $result= $num1 + $num2;
        break;
        case "-":
            $result= $num1 - $num2;
            break;
            case "*":
                $result= $num1 * $num2;
                break;
                case "/":
                    if($num2 == 0){
                        throw new Exception("dividing by zero is not allowed");
                    }
                    $result=$num1 / $num2;
                  break;
                  default:
                  throw new Exception("invalid operator please use +,-,* or /");
  }
}catch(Exception $e){
         echo "<p style='color:red'>".$e->getMessage()."</p>";
}
    if($result !=null){
        echo "<p style='color:blue'> the Results is :".$result."</p>";
    }

?>
 
   
</body>
</html>