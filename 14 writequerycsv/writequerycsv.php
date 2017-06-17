<?php
/**
 * Created by PhpStorm.
 * User: semen_000
 * Date: 2/27/2017
 * Time: 12:57 AM
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Products.p_name as p_name, Categories.c_name as c_name
          FROM Associations
            INNER JOIN Products
              ON Associations.p_id = Products.p_id
            INNER JOIN Categories
              ON Associations.c_id = Categories.c_id";
$result = $conn->query($sql);
$fp = fopen('writequery.csv', 'w');
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        //echo "id: " . $row["p_name"]. " - Name: " . $row["c_name"];
        fputcsv($fp, array($row["p_name"],$row["c_name"]));
    }
}
fclose($fp);
$conn->close();