<html>
<head>
	<title>STUDENT information</title>
	<link rel="stylesheet" type="text/css" href="styletable.css">
</head>
<body>
<br><br>
<br>

			<h1 class="name">G R A D E &nbsp C A R D</h1>
       <?php
       error_reporting(E_ERROR | E_PARSE);
       $name = $_REQUEST['name'];
       $rollno = $_REQUEST['rollno'];
       $dept = $_REQUEST['dept'];
       $gender = $_REQUEST['gender'];
       $sem = $_REQUEST['sem'];
       $c1 = $_REQUEST['c1'];
       $c1c = $_REQUEST['c1c'];
       $c1cg = $_REQUEST['c1cg'];
       $c2 = $_REQUEST['c2'];
       $c2c = $_REQUEST['c2c'];
       $c2cg = $_REQUEST['c2cg'];
		$c3 = $_REQUEST['c3'];
       $c3c = $_REQUEST['c3c'];
		$c3cg = $_REQUEST['c3cg'];
       $c4 = $_REQUEST['c4'];
       $c4c = $_REQUEST['c4c'];
       $c4cg = $_REQUEST['c4cg'];
       $c5 = $_REQUEST['c5'];
       $c5c = $_REQUEST['c5c'];
       $c5cg = $_REQUEST['c5cg'];
       $c6 = $_REQUEST['c6'];
       $c6c = $_REQUEST['c6c'];
       $c6cg = $_REQUEST['c6cg'];
       $ctot = $c1c+$c2c+$c3c+$c4c+$c5c+$c6c;
       $cgpa = ($c1c*$c1cg+$c2c*$c2cg+$c3c*$c3cg+$c4c*$c4cg+$c5c*$c5cg+$c6c*$c6cg)/($c1c+$c2c+$c3c+$c4c+$c5c+$c6c);
	
       echo"<p align=center>
				Name :  $name <br><br> Roll Number :  $rollno &nbsp Semester : $sem<br><br>
					  Department :  $dept &nbsp&nbsp&nbsp&nbsp    Gender :  $gender<br><br>
			</p>";
		echo"<h2>C O U R S E &nbsp D E T A I L S</h2>
		<table  align=center>
    <thead>
      <tr>
      	<th>Sl. No.</th>
        <th>Course</th>
        <th>Credits</th>
        <th>Credit Points</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	<td>1</td>
        <td>$c1</td>
        <td>$c1c</td>
        <td>$c1cg</td>
      </tr>
      <tr>
        <td>2</td>
        <td>$c2</td>
        <td>$c2c</td>
        <td>$c2cg</td>
      </tr>
      <tr>
        <td>3</td>
        <td>$c3</td>
        <td>$c3c</td>
        <td>$c3cg</td>
      </tr>
      <tr>
      	<td>4</td>
        <td>$c4</td>
        <td>$c4c</td>
        <td>$c4cg</td>
      </tr>
      <tr>
         <td>5</td>
        <td>$c5</td>
        <td>$c5c</td>
        <td>$c5cg</td>
      </tr>
      <tr>
        <td>6</td>
        <td>$c6</td>
        <td>$c6c</td>
        <td>$c6cg</td>
      </tr>
    </tbody
	</table>";
	echo"<p>Total &nbsp Credits:$ctot &nbsp&nbsp&nbsp CGPA : $cgpa</p>";   
       ?>  
</BODY>
</HTML>




