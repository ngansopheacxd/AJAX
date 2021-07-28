<?php
$mysqli = new mysqli("localhost", "root", "", "data_ajax_select");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT CustomerID, CustomerName, ContactName, Address, City, PostalCode, Country
FROM customers WHERE CustomerID = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cid, $cname, $Coname, $adr, $city, $pcode, $country);
$stmt->fetch();
$stmt->close();

echo "<table>";
  echo "<tr>";
    echo "<th>CustomerID</th>";
    echo "<td>" . $cid . "</td>";
    echo "<th>CompanyName</th>";
    echo "<td>" . $cname . "</td>";
    echo "<th>ContactName</th>";
    echo "<td>" . $Coname . "</td>";
    echo "<th>Address</th>";
    echo "<td>" . $adr . "</td>";
    echo "<th>City</th>";
    echo "<td>" . $city . "</td>";
    echo "<th>PostalCode</th>";
    echo "<td>" . $pcode . "</td>";
    echo "<th>Country</th>";
    echo "<td>" . $country . "</td>";
  echo "</tr>";
echo "</table>";
?> 