<?php
  $page = '<html><title>HW5</title></html>';

  $n = $_GET['n'];
  echo $page;

  $table = "<table style='border: 1px solid black'>";
  for($i = 0; $i < 10; $i++)
  {
   $table .= "<tr style = 'border:1px solid black'>\n";
   for($j=0; $j< 10; $j++)
   {
    $table .= "<td style = 'border:1px solid black'>". ($n + $j) ."</td>\n";
   }
    $n++;
    $table .= "</tr>\n";
  }
  $table .='</table>';

  echo $table;
?>
