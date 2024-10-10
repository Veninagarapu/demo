<form method="POST" action="">
    <label for="searchid">id</label>
    <input name="searchid" >
    <input type="submit" name="submitsearch" value="submit">
</form>

<?php

include('db.php');

if(isset($_POST['submitsearch'])){
    $searchid = $_POST['searchid'];
}

$query = "select * from user where id=?";

$ps = $con->prepare($query);
$ps->bind_param("i", $searchid);
$ps->execute();

$record = $ps->get_result();
// echo "$record";
if(mysqli_num_rows($record)>0){

while($row = mysqli_fetch_row($record)){
    echo "$row[0]";
}
}else{
    echo "no record";
}

$con->close();