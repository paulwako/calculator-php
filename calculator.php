<!DOCTYPE html>
<html>
<head>
<title>Multipurpose Calculator</title>
</head>
<style>
    body{
        align-content:center;
        justify-content:center;
        width: 40vw;
        height:70vh;
        background-color:grey;
        
    }
    form{
        width:50%;
        height:70%;
        background-color:white
        margin:auto;
    }
    h1{
        background-color:white;
    }
    
</style>
<body>
<h1>Multipurpose Calculator</h1>
<form method="post">
  <label for="num1">Number 1:</label>
  <input type="number" name="num1" id="num1" required><br><br>
  <label for="num2">Number 2:</label>
  <input type="number" name="num2" id="num2" required><br><br>
  <label for="operation">Operation:</label>
  <select name="operation" id="operation">
    <option value="add">+</option>
    <option value="subtract">-</option>
    <option value="multiply">*</option>
    <option value="divide">/</option>
    <option value="exponent">**</option>
    <option value="percentage">%</option>
    <option value="square_root">√</option>
    <option value="logarithm">log</option>
  </select><br><br>
  <button type="submit">Calculate</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $operation = $_POST["operation"];

  switch ($operation) {
    case "add":
      $result = $num1 + $num2;
      break;
    case "subtract":
      $result = $num1 - $num2;
      break;
    case "multiply":
      $result = $num1 * $num2;
      break;
    case "divide":
      if ($num2 == 0) {
        $result = "Error ";
      } else {
        $result = $num1 / $num2;
      }
      break;
    case "exponent":
      $result = pow($num1, $num2);
      break;
    case "percentage":
      $result = ($num1 / 100) * $num2;
      break;
    case "square_root":
      $result = sqrt($num1);
      break;
    case "logarithm":
      $result = log($num1);
      break;
    default:
      $result = "Invalid operation";
  }

  echo "<br>Result: ".$result;
}
?>
</body>
</html>
