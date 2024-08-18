  <?php
 if(isset($_POST['submit'])) // it checks if the input submit is filled
 {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2']; 
  if(is_numeric($num1) and is_numeric($num2) )
  {
   echo "<tr><td> Addition :</td><td><p>".($num1+$num2)."</p></td>"; 
   echo "<tr><td> Subtraction :</td><td><p> ".($num1-$num2)."</p></td>"; 
   echo "<tr><td> Multiplication :</td><td><p>".($num1*$num2)."</p></td>"; 
   echo "<tr><td>Division :</td><td><p> ".($num1/$num2)."</p></td>";
   echo "</table>";
  }
  else
  {
   echo"<script> alert(' ENTER VALID NUMBER');</script>";
  }
 }
 ?>
</body>
</html>
