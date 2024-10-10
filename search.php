<?php

include('db.php');


$query = "select * from user";

$record = $con->query($query);
$n = mysqli_num_rows($record);

echo "$n total";
if($n>0){
while($row=mysqli_fetch_row($record)){
        echo "$row[0] <br>";
}
}else{
    echo "no records"
}

$con->close();


