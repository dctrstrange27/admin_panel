
<div >
  <h3>Courses</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-left">Index</th>
        <th class="text-left">Courses</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from courses";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td>   <?=$row["Course"]?></td>   
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>
</div>
   