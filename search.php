<?php

$condition = $_GET['userID'];

$con=mysqli_connect("localhost", "ID", "PW", "DB") or die("DB Connection Error");

$sql = "SELECT * FROM TABLENAME WHERE USER_ID = '".$condition."'";

$qry = mysqli_query($con, $sql);



if($qry) {
        $count = mysqli_num_rows($qry);
}
else {
        echo "Fail";
        echo mysqli_error($con);
        exit();
}

if($count==0){
        echo "Can't find your information.";
}
else{
        $result = mysqli_fetch_array($qry);
        echo $result['COL'];
}

mysqli_close($con);

?>