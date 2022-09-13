<?php
$con = new mysqli("localhost","root","","kavery");
?>
<head>
    <title>Add Faculty</title>
</head>
<body style="background-color:lightblue;" >
 <?php
    if(isset($_POST["submit"]))
    {
     $name = $_POST["name"];
    $qualification = $_POST["qualification"];
    $designation = $_POST["designation"];
     $sql="INSERT INTO faculty (name,qualification, designation) VALUES ('$name','$qualification','$designation')";
     if($con->query($sql))
     {
         echo "Add Successfully";
     }
     else
     {
         echo "error occur";
     }
    }
?>
<div>
    <form  action="facultyadd.php"  method="POST">
    <center><h3>Enter the below fields to add Faculty</h3>
        <br>
       <label >Name</label>
        <input type="text" name="name" placeholder="Name"><br><br>
        <br><br>
       <label >Qualification</label>
        <input type="text" name="qualification" placeholder="Qualification"><br><br><br><br>
       <label >Designation</label>
        <input type="text" name="designation" placeholder="Designation"><br><br>
        <br><br>
        <button type="submit" name="submit"> ADD</button>
  </center>
  </form>
</div>
</body>
</html>
