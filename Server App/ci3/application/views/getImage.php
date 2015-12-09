<?php

//Display image
mysql_connect("localhost","root","");
mysql_select_db("ci3");
$res=mysql_query("select * from images");
echo "<table>";
while($row=mysql_fetch_array($res)) {
    echo "<tr>";
    echo "<td>"; echo $row["id"]; echo "</td>";
    
    echo "</tr>";
    
    }
    echo "</table>";
?>

