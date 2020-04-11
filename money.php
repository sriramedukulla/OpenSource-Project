<?php
$bill=$_POST["bill"];
echo "Units: $bill <br>";
$result=0;
$x=0;
if($bill>=100){
	$result=50*9+(50)*12+($bill-100)*15;
}
else if ($bill>=50 && $bill<100) {
	# code...
	$result=50*9+($bill-50)*12;
}
else{
	$result=$bill*9;
}
echo "\n This amount has to be paid is $result ";
$conn = mysqli_connect("localhost", "root", "", "currentbill");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO currentbill VALUES('$bill', '$result')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>