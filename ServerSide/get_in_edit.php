<?php

include('../db/connect.php');
$id =$_POST['myid'];
$

$sql = "SELECT * FROM user where name='Rakchanok' and surname='Su'" ; // modifiy
$result = $con->query($sql);
//$row = $result->fetch_array(MYSQLI_NUM);

//echo $row[0]."&nbsp;".$row[1]."&nbsp;".$row[2];

while($row = mysqli_fetch_array($result)) {             
    echo $row['id'];
    echo $row['username'];
    echo $row['passwd'];
    echo $row['name'];
    echo $row['surname'];
    echo "<br>"; 
}


    

    /*
    $posts[0] = $row['id'];
    $posts[1] = $row['username'];
    $posts[3] = $row['password'];
    */
/* associative array */

/*$row = $result->fetch_array(MYSQLI_ASSOC);
printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
 */   
      mysqli_free_result($result); 
    
    mysqli_close($con);

?>