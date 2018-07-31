<?php include 'header.php'; ?>
<body>
<br>
<br>
<br>
<h1 style="text-decoration:underline">Fill all the blanks</h1>
<div style="text-align:center;">
<form action="stconnect.php" method="POST" >

<label ><b>Student's Name:</b></label>
<input type="text" name="st_name" placeholder="enter stdent's name" required><br><br>

<label><b>Student's ID:   </b></label>
<input type="text" name="st_id" placeholder="enter stdent's id" maxlenth="08" required><br><br>

<label><b>Student's Date-of-Birth:</b></label>
<input type="date" name="date" required><br><br>

<label><b> Sex:    </b></label>
<input type="radio" name="sex" value="male" checked> Male
<input type="radio" name="sex" value="female"> Female<br><br>


<label><b>Student's E-mail:</b></label>
<input type="text" name="st_mail" placeholder="enter stdent's mail" required><br><br>
<label><b>Student's Phone: </b></label>
<input type="text" name="st_phone" placeholder="enter stdent's phone no." required><br><br>

 <input  type="submit" value="Save" id="submit" id="submit"/>
 


 

 


 
 
</form>
</div>
<?php include 'footer.php'; ?>

</body>


</html>