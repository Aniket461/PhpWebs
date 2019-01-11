<?php

$db = mysqli_connect("localhost","root","root","website"); 
$sql = "SELECT * FROM images";
$sth = $db->query($sql);

while($result=mysqli_fetch_array($sth)){


?>
<div style="width: 80%; margin-left: 10%; border: 1px solid black;">

<?php

echo '<img height="300px" src="data:image/jpeg;base64,'.base64_encode( $result['picture'] ).'"/>';
}

?>

</div>