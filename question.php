<?php
include '../resources/properties.php';

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM question;";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $response[] = $row;
    }
} else {
    $response = array(
        'status'         => 204,
        'status_message' => "No data",
    );
}
echo json_encode($response);
$conn->close();
?>
