
<div >
  <h3>Available Rooms</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-left">Index Number</th>
        <th class="text-left">Room Number</th>
      </tr>
    </thead>
 <?php
include_once "../config/dbconnect.php";
$sql = "SELECT * FROM Rooms";
$result = $conn->query($sql);
$count = 1;
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
?>
<tr>
  <td><?=$count?></td>
  <td><?=$row["Room"]?></td>
</tr>
<?php
    $count++;
  }
}
?>
  </table>

</div>
   