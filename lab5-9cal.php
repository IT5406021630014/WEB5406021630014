<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
  $front = $_POST['front'];
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $nm = $_POST['nm'];
  $gen = $_POST['gen'];
  if($gen = 1)
  {
	  $gen = ชาย;
  }
  else
  {
	  $gen = หญิง;
  }
  $day = $_POST['day'];
  $mon = $_POST['mon'];
  $mond = intval($mon);
  if($mon == 1)
  {
	  $mon = มกราคม;
  }
  else if($mon == 2)
  {
	  $mon =กุมภาพันธ์;
  }
  else if($mon == 3)
  {
	  $mon =มีนาคม;
  }
  else if($mon == 4)
  {
	  $mon =เมษายม;
  }
  else if($mon == 5)
  {
	  $mon =พฤษภาคม;
  }
  else if($mon == 6)
  {
	  $mon =มิถุนายน;
  }
  else if($mon == 7)
  {
	  $mon =กรกฎาคม;
  }
  else if($mon == 8)
  {
	  $mon =สิงหาคม;
  }
  else if($mon == 9)
  {
	  $mon =กันยายน;
  }
  else if($mon == 10)
  {
	  $mon =ตุลาคม;
  }
  else if($mon == 11)
  {
	  $mon =พฤษศจิกายน;
  }
  else if($mon == 12)
  {
	  $mon =ธันวาคม;
  }
  $year = $_POST['year'];
  $y = intval($year)+543;
  $age = $_POST['age'];
  $c1 = $_POST['c1'];
  $c2 = $_POST['c2'];
  $c3 = $_POST['c3'];
  $c4 = $_POST['c4'];
  $c5 = $_POST['c5'];
  $c6 = $_POST['c6'];
  $c7 = $_POST['c7'];
  $c8 = $_POST['c8'];
  $c9 = $_POST['c9'];
  $c10 = $_POST['c10'];
  $cel = $_POST['cel'];
  $mail = $_POST['mail'];
  $add = $_POST['add'];

  echo "<table border='1' align='center' width='500'>";
  echo "<tr>";
  echo "<p>";
  echo "<td>";
  echo "$front &nbsp";
  echo "$name &nbsp";
  echo "$surname $nbsp";
  echo "( $nm )<br /><hr>";
  echo "เพศ : $gen <br /><hr>";
  echo "เกิดเมื่อ : วันที่ $day เดือน $mon พ.ศ. ".$y."<br/><hr>";
//---------------------------------------
  echo "อายุ : $age ";
  if(($age <= 0)/*||($age = 100)*/) echo "  <font color='red'>&nbsp | Your age is wrong.</font><br/><hr>";
  elseif(($age > 0)&&($age<=13)) echo "  <font color='blue'>&nbsp | You are child.</font><br/><hr>";
  elseif(($age > 13)&&($age<=59)) echo "  <font color='blue'>&nbsp | You are working age.</font><br/><hr>";
  elseif(($age > 60)&&($age<=100)) echo "  <font color='orange'>&nbsp | You aer retire.</font><br/><hr>";
  elseif($age > 100) echo "  <font color='red'>&nbsp | Your age is wrong</font><br/><hr>.";
//---------------------------------------
  echo "งานอดิเรก : $c1 $c2 $c3 $c4 $c5 $c6 $c7 $c8 $c9 $c10 <br/><hr>";
  echo "หมายเลขโทรศัพท์ : $cel <br /><hr>";
  echo "อีเมล์ : $mail <br/><hr>";
  echo "ที่อยู่ : $add <br/<hr>";
  echo "</td></tr>";
  //echo "----------------------<br/ >";
  echo "</table>";
?>
<br />
<center><a href="lab5-9.php"><font size="3" color="BLUE">BACK</font></a></center>
</body>
</html>
