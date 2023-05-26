<!DOCTYPE html>
<html>
<body>

<h2>Conversor de Temperatura</h2>

<form method="post">
  <label for="fahrenheit">Temperatura em Fahrenheit:</label>
  <input type="number" id="fahrenheit" name="fahrenheit"><br><br>
  <input type="submit" value="Converter">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fahrenheit = $_POST["fahrenheit"];
  $celsius = ($fahrenheit - 32) * 5/9;
  echo "<p>Temperatura em Celsius: " . $celsius . "</p>";
}
?>

</body>
</html>
