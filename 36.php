<html> 
  <body> 
   <table width="240px" cellspacing="0px" border="1px">
      <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
            {
            echo "<td height=25px width=25px bgcolor=white></td>";
            }
            else
            {
            echo "<td height=25px width=25px bgcolor=black></td>";
            }
            }
            echo "</tr>";
      }
            ?>
    </table>
    </body>
    </html>