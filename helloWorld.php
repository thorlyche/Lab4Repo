<?php
function product($x, $y) {
    $z = $x * $y;
    return $z;
}
echo "<table style='width:100%'>";
for ($x = 1; $x <= 100; $x++)
{
  echo "<tr>";
  for ($y = 1; $y <= 100; $y++)
  {
    echo "<td>";
    echo product($x, $y);
    echo "</td>";
  }
  echo "<tr>";
}
echo "</table>";

?>
