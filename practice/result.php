<?php include 'header.php'; ?>
<body>
<h1 style="text-decoration:underline;">Fill all the blanks</h1>

<form action="rconnect.php" method="POST">



<label><b>Course Code:<b></label>
<input type="text" name="c_code" placeholder="enter course code"  required><br><br>
<label><b>Student ID<b></label>
<input type="text" name="st_id" placeholder="enter student's ID" required><br><br>
<label><b>Semester:<b></label>
<select name="sem" >
  <option value="#">--select semester--</option>
  <option value="1st">1st</option>
  <option value="2nd">2nd</option>
  <option value="3rd">3rd</option>
  <option value="4th">4'th</option>
  <option value="5th">5'th</option>
  <option value="6th">6'th</option>
  <option value="7th">7'th</option>
  <option value="8th">8'th</option>
  <option value="9th">9'th</option>
  <option value="10th">10'th</option>
  <option value="11th">11'th</option>
  <option value="more">More</option>

</select>
<br><br>
<label><b>Grade:<b></label>
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