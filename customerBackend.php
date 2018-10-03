<?php
echo '<body style="background-color:Yellow">';
$uname= $_POST["username"];
$password= $_POST["password"];
$puppies= $_POST["puppies"];
$kittens= $_POST["kittens"];
$fish= $_POST["fish"];
$shipType = $_POST["ship"];
echo "<br>Welcome " .$uname. ",<br>";
echo "Your password is: " .$password. "<br>Below is a receipt of your transaction<br>";

echo '<table border = "10">';
  echo '<tr>';
    echo '<th>Item</th>';
    echo '<th>Item Quantity</th> ';
    echo '<th>Cost Per Item</th>';
    echo '<th>Subtotal</th>';

  echo '</tr>';
  echo '<tr>';
    echo '<td>Puppies</td>';
    echo '<td>' .$puppies. '</td>';
    echo '<td>$300</td>';
    echo '<td>' .($puppies*300).'</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td>Kittens</td>';
    echo '<td>' .$kittens. '</td>';
    echo '<td>$30</td>';
    echo '<td>' .($kittens*30).'</td>';
  echo '</tr>';
  echo '<tr>';
      echo '<td>Fish</td>';
      echo '<td>' .$fish. '</td>';
      echo '<td>$15</td>';
      echo '<td>' .($fish*15).'</td>';
    echo '</tr>';
    echo '<tr>';
      echo '<td colspan = 3>Shipping Cost</td>';
      echo '<td>' .$shipType. '</td>';
    echo '</tr>';
  echo '<tr>';
    echo '<td colspan = 3>Total</td>';
    echo '<td>'.($shipType+($puppies*300)+($kittens*30)+($fish*15)).'</td>';
  echo '</tr>';
echo '</table>';

?>
