<html>
<body>
<?php
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $nm = $_POST['nm'];
  $gen = $_POST['gen'];
  $birth = $_POST['birth'];
  $age = $_POST['age'];
  $hob = $_POST['hob'];
  $cel = $_POST['cel'];
  $mail = $_POST['mail'];
  $add = $_POST['add'];

  echo "<table border='1' align='center' width='500'>";
  echo "<tr>";
  echo "<p>";
  echo "<td>";
  echo "Name : $name <br /><hr>";
  echo "Surname : $surname <br /><hr>";
  echo "Nickname : $nm <br /><hr>";
  echo "Gender : $gen <br /><hr>";
  echo "Birthdate : $birth <br /><hr>";
//---------------------------------------
  echo "Age : $age ";
  if(($age <= 0)/*||($age = 100)*/) echo "  <font color='red'>&nbsp | Your age is wrong.</font><br/><hr>";
  elseif(($age > 0)&&($age<=60)) echo "  <font color='blue'>&nbsp | You are in working age.</font><br/><hr>";
  elseif(($age > 60)&&($age<=100)) echo "  <font color='orange'>&nbsp | You aer retire.</font><br/><hr>";
  elseif($age > 100) echo "  <font color='red'>&nbsp | Your age is wrong</font><br/><hr>.";
//---------------------------------------
  echo "Hobby : $hob<br/><hr>";
  echo "Phone number : $cel <br /><hr>";
  echo "Email : $mail <br/><hr>";
  echo "Address : $add <br/<hr>";
  echo "</td></tr>";
  //echo "----------------------<br/ >";
  echo "</table>";
  /*if($operator == "+") echo($number1 + $number2)."</i><br />";
  if($operator == "-") echo($number1 - $number2)."</i><br />";
  if($operator == "*") echo($number1 * $number2)."</i><br />";
  if($operator == "/") echo($number1 / $number2)."</i><br />";
  if($operator == "%") echo($number1 % $number2)."</i><br />";*/
?>
<br />
<center><a href="lab5-9.php"><font size="3" color="BLUE">BACK</font></a></center>
</body>
</html>
