<!DOCTYPE html>
<!triathlon-11.12.2015>
<html>
<head>
  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>STUDENT INFORMATION</title>

  <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:400,700">
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
	<?php
// define variables and set to empty values
$nameErr = $rollnoErr = $genderErr = "";
$name = $rollno = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
   		}
   }
   
   if (empty($_POST["rollno"])) {
     $rollnoErr = "Roll number is required";
   } else {
     $rollno = test_input($_POST["rollno"]);
   }
     
   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>
	<style>
	.error {color: #FF0000;}
	</style>
	<br>
	<br>
	<h1 class="name">S T U D E N T</h1><h1 class="name"> I N F O R M A T I O N</h1>
	<p><span class="error">* required field.</span></p>
	<form action="table.php3" method="POST" name="STUDINFO">
		<table align="center">
		<tr>
		<input type="text" name="name" placeholder="Name...">
		<span class="error">* <?php echo $nameErr;?></span>
		<br><br>
		</tr>
		<tr>
		<input type="text" name="rollno" placeholder="Roll Number... ">
		<span class="error">* <?php echo $rollnoErr;?></span>
		<br><br>
		</tr>
		<tr>
		<input type="text" name="dept" placeholder="Department..."><br><br>
		</tr>
    <tr>
    <input type="text" name="sem" placeholder="Semester..."><br><br>
    </tr>
		<tr>
		Gender : 
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female
		<span class="error">* <?php echo $genderErr;?></span>
		<br><br>
		</tr>
    <br><br>
		<h2>C O U R S E</h2><h2> D E T A I L S</h2>
		
    		<tr>
        		<td style="padding-left: 300px" style="padding-right: 10px">
            <input type="text" name="c1" placeholder="Course 1... " >
        		</td>
            <td style="padding-right: 20px" >
            <input type="text" name="c1c"  style="width: 50px" placeholder="Credits...">
            </td>
            <td> 
            <input type="text" name="c1cg" style="width: 100px" placeholder="Grade Points...">
            </td>
        </tr>
			<tr><td></td></tr>

        <tr>
            <td style="padding-left: 300px" style="padding-right: 10px">
            <input type="text" name="c2" placeholder="Course 2... " >
            </td>
            <td style="padding-right: 20px" >
            <input type="text" name="c2c"  style="width: 50px" placeholder="Credits...">
            </td>
            <td> 
            <input type="text" name="c2cg" style="width: 100px" placeholder="Grade Points...">
            </td>
        </tr>
      <tr><td></td></tr>

          <tr>
            <td style="padding-left: 300px" style="padding-right: 10px">
            <input type="text" name="c3" placeholder="Course 3... " >
            </td>
            <td style="padding-right: 20px" >
            <input type="text" name="c3c"  style="width: 50px" placeholder="Credits...">
            </td>
            <td> 
            <input type="text" name="c3cg" style="width: 100px" placeholder="Grade Points...">
            </td>
        </tr>
      <tr><td></td></tr>

            <tr>
            <td style="padding-left: 300px" style="padding-right: 10px">
            <input type="text" name="c4" placeholder="Course 4... " >
            </td>
            <td style="padding-right: 20px" >
            <input type="text" name="c4c"  style="width: 50px" placeholder="Credits...">
            </td>
            <td> 
            <input type="text" name="c4cg" style="width: 100px" placeholder="Grade Points...">
            </td>
        </tr>
      <tr><td></td></tr>

            <tr>
            <td style="padding-left: 300px" style="padding-right: 10px">
            <input type="text" name="c5" placeholder="Course 5... " >
            </td>
            <td style="padding-right: 20px" >
            <input type="text" name="c5c"  style="width: 50px" placeholder="Credits...">
            </td>
            <td> 
            <input type="text" name="c5cg" style="width: 100px" placeholder="Grade Points...">
            </td>
        </tr>
      <tr><td></td></tr>

      <tr>
            <td style="padding-left: 300px" style="padding-right: 10px">
            <input type="text" name="c6" placeholder="Course 6... " >
            </td>
            <td style="padding-right: 20px" >
            <input type="text" name="c6c"  style="width: 50px" placeholder="Credits...">
            </td>
            <td> 
            <input type="text" name="c6cg" style="width: 100px" placeholder="Grade Points...">
            </td>
        </tr>
      <tr><td></td></tr>
		</table>
    <button type="submit">Submit</button>
	</form>

  <!-- Javascript -->
        <script src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

</body>
</html>