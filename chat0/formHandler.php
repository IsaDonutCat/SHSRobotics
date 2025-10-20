<?php
$servername = "localhost";
$username = "root";
$password = "raspberry";
$dbname = "chat0";
$sql = $_POST["query"];
$channel = $_POST["Channel"];
$user = $_POST["User"];
$channel_int = ord($channel)-96;
echo "Your query: " . $sql . "<br><br> TO: " . $channel . "<br><br> AS: " . $user . "<br><br>";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
        echo "CONNECTION FAILED YOU MORON: " . mysqli_connect_error();
} else {
echo "200"."<br>";
}
echo "Currently displaying: #general<br><br>";
mysqli_query($conn, "INSERT INTO Messages values (DEFAULT, ".$channel_int.", ".$user.", 0, 1, '" . $sql . "', NULL);");
$result = mysqli_query($conn, "SELECT * FROM Messages WHERE channel_id=1;");
if($result){
if(mysqli_num_rows($result) > 0){
        echo "<table border=1>";
        while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                foreach ($row as $colname => $colval){
                        echo "<td>" . $colname . ": " . $colval . "</td>";
                }
                echo "</tr>";
        }
        echo "</table>";
} else {
echo "<br>0 RESULTS.";
}
} else {
echo "<br>Malformed request or 0 RESULTS.";
}





?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<input type="submit" value
