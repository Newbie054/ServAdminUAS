<?php
$conn = mysqli_connect("sql-for-uas", "Trucorp", "Trucorp", "Trucorp");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$count = 0;
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["ID"]. " - Nama: " . $row["Nama"]. " - Kantor: " . $row["Kantor"]. "<br>";
    $count++;
  }
} else {
  echo "0 results";
}
$conn->close();
echo "total data in tables: ";
echo $count;
?>
