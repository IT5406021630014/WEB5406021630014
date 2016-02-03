<html>
<head >
  <meta charset="UTF-8">
  <title>Create form for recieve value</title>
</head>
<body>
  <form method="POST" action="lab5-9cal.php">
    <table border="1" align="center" width="500">
      <tr>
        <td colspan="2" align="center">
          <big>Enter PROFILE!</big>
        </td>
        <tr>
        <tr>
          <td>Enter name : </td>
          <td><input type="text" name="name" size="50" value=""/></td>
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
            <input type="radio" name="gen" value="Male">Male
            <input type="radio" name="gen" value="Female">Female<br/>
          </td>
        </tr>
          <td>Enter birthday : Ex dd/mm/yyyy</td>
          <td><input type="text" name="day" size="2" value=""/> /
          <input type="text" name="mon" size="2" value=""/> /
          <input type="text" name="year" size="4" value=""/></td>
        </tr>
        <tr>
          <tr>
          <td>Enter age : </td>
          <td><input type="text" name="age" size="2" value=""/></td>
        </tr>
        <tr>
        <td>Enter hobby : </td>
        <td><input type="text" name="hob" size="30" value=""/></td>
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
