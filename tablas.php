<html>
 <head>
 <link rel="stylesheet" href="color.css">
 <?php
 
  
  $texto = 0;
  ?>                                                   
 </head>                                                                 
 <body>      
 
<table border="1">
 <?php

 $clase='';
 for($fil=0;$fil<10;$fil++){
  echo "<tr>";
 
  for($col=0;$col<10;$col++){
 
   if($fil%2==0){
    $clase='class="par"';
    }else{
$clase='class="impar"';
   }
  echo "<td ".$clase.">".$texto."</td>";
  $texto++;
  }
   echo "</tr>";
  }
 ?>
 
 </table>
 </body>                                                                 
 </html>