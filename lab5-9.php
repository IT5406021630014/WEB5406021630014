<html>
<head >
  <meta charset="UTF-8">
  <title>Create form for recieve value</title>
</head>
<body>
  <form method="POST" action="lab5-9cal.php" id="profile">
    <table border="1" align="center" width="500">
      <tr>
        <td colspan="2" align="center">
          <big>Enter PROFILE!</big>
        </td>
        <tr>
        <tr>
          <td>Enter name : </td>
          <td>
			<select name="front">
			<option  value="นาย">นาย</option>
			<option  value="นาง">นาง</option>
			<option  value="นางสาว">นางสาว</option>
			</select>
			<input type="text" name="name" size="50" value=""/>
		  </td>
        </tr>
          <td>Enter surname : </td>
          <td><input type="text" name="surname" size="50" value=""/></td>
        </tr>
        <tr>
        <tr>
          <td>Enter nickname : </td>
          <td><input type="text" name="nm" size="15" value=""/></td>
        </tr>
        <tr>
          <td>Gender : </td>
          <td align="left">
            <input type="radio" name="gen" value="1">Male
            <input type="radio" name="gen" value="2">Female<br/>
          </td>
        </tr>
          <td>Enter birthday : dd/mm/yyyy </td>
          <td>
		  <input type="text" name="day" size="2" value=""/> /
          <input type="text" name="mon" size="2" value=""/> /
          <select name="year">
		  <option value="">-----</option>
		  <option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option>
		  <option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option>
		  <option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option>
		  <option value="1979">1979</option>
		  <option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option>
		  <option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option>
		  <option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option>
		  <option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option>
		  <option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option>
		  <option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option>
		  <option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option>
		  <option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option>
		  <option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option>
		  <option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option>
		  <option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option>
		  <option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option>
		  <option value="2016">2016</option>
		  </select>
        </tr>
        <tr>
          <tr>
          <td>Enter age : </td>
          <td><input type="text" name="age" size="2" value=""/></td>
        </tr>
        <tr>
        <td>Enter hobby : </td>
        <td><input type="checkbox" name="c1" value="อ่านหนังสือ "/>อ่านหนังสือ
			<input type="checkbox" name="c2" value="ดูหนัง "/>ดูหนัง <br/>
			<input type="checkbox" name="c3" value="ฟังเพลง "/>ฟังเพลง
			<input type="checkbox" name="c4" value="เล่นเกม "/>เล่นเกม<br/>
			<input type="checkbox" name="c5" value="วาดรูป "/>วาดรูป
			<input type="checkbox" name="c6" value="แต่งเพลง "/>แต่งเพลง<br/>
			<input type="checkbox" name="c7" value="เขียนโปรแกรม "/>เขียนโปรแกรม
			<input type="checkbox" name="c8" value="เล่นเฟสบุค "/>เล่นเฟสบุค<br/>
			<input type="checkbox" name="c9" value="Steamer "/>Steamer
			<input type="checkbox" name="c10" value="เขียนนิยาย "/>เขียนนิยาย<br/>
		</td>
		</tr>
          <td>Enter phonenumber : </td>
          <td><input type="text" name="cel" size="10" value=""/></td>
        </tr>
        <tr>
          <td>Enter email : </td>
          <td><input type="text" name="mail" size="30" value=""/></td>
        </tr>
        <tr>
          <br><td>Enter address : </td>
          <td><input type="text" name="add" size="50" value=""/>
        </tr>
</tr>
    </table>
    <br/><br/>
  <center>
      <input type="submit" value="  OK  "/>
      <input type="reset" value="  CLEAR  "/>
  </center>
  </form>
</body>
</html>
