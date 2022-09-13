<?php
$con = new mysqli("localhost","root","","kavery");
?>
<head>
    <title>Remove Member</title>
</head>
<body style="background-color:lightblue;" >
 <?php
    if(isset($_POST["submit"]))
    {
     $name = $_POST["name"];
     $sql="DELETE FROM members WHERE id=$name";
     if($con->query($sql))
     {
         echo "Deleted Successfully";
     }
     else
     {
         echo "error occur";
     }
    }
?>
<div>
    <form  action="deletemem.php"  method="POST">
    <center><h3>Enter the member id to remove</h3>
        <br>
       <label > Id</label>
        <input type="text" name="name" placeholder="Id"><br><br>
    
        <button type="submit" name="submit"> DELETE</button>
  </center>
  </form>
</div>
</body>
</html>
