<?php
$servername = "localhost";
$username = "root";
$password = "raspberry";
$dbname = "chat0";
$sql = $_POST["query"];
echo "Your query: " . $sql . "<br><br>";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
        echo "CONNECTION FAILED YOU MORON: " . mysqli_connect_error();
} else {
echo "200"."<br>";
}

mysqli_query($conn, "INSERT INTO Messages values (DEFAULT, 1, 1, 0, 1, '" . $sql . "', NULL);");
$result = mysqli_query($conn, "SELECT * FROM Messages;");
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
echo "<br>INSERT INTO Messages values (DEFAULT, 1, 1, 0, 1, '" . $sql . "', NULL);";





?>
