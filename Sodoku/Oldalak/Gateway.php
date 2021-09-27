<?php
function sql($lekeres){
    $servername= "localhost";
    $username= "root";
    $password= "";
    $dbname= "sodoku";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = $lekeres;
    $result = $conn->query($sql);
    $rows = [];
    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $rows[] = $row;
            }
        } else {
            //echo "Üres a lekérdezés";
        }
    }
    $conn->close();
    return $rows;
}
?>
