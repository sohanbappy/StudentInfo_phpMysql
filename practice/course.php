<?php include 'header.php'; ?>
<body>
<h1 style="text-decoration:underline;">Fill all the blanks</h1>

<form action="cconnect.php" method="POST">



<label><b>Course Code:<b></label>
<input type="text" name="c_code" placeholder="enter course code"  required><br><br>
<label><b>Course Name:<b></label>
<input type="text" name="c_name" placeholder="enter course name" required><br><br>
<label><b>Course Credit:<b></label>
<input type="text" name="c_credit" placeholder="1-4" required><br><br>

<label><b>Course Grade:<b></label>
<select name="c_grade" >
  <option value="#">--select grade--</option>
  <option value="F">F</option>
  <option value="D">D</option>
  <option value="C">C</option>
  <option value="B">B</option>
  <option value="A">A</option>
</select>
<br>
<br>




 <input  type="submit" value="Save" id="submit" id="submit" style="border:2px solid red;"/><br>
 
</form>
<?php include 'footer.php'; ?>
</body>
</html>