<div>
  <h2>All Students</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Index</th>
        <th class="text-center">Username </th>
        <th class="text-center">Course</th>
        <th class="text-center">Student Number</th>
        <th class="text-center">Date of Admission</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
    include_once "../config/dbconnect.php";
    $sql = "SELECT * FROM students WHERE bool = 0";
    $result=$conn-> query($sql);
    $count=1;
    if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["last_name"]?>, <?=$row["first_name"]?> <?=$row["middle_initial"]?></td>
      <td><?=$row["course"]?></td>
      <td><?=$row["student_no"]?></td>
      <td><?=$row["admitted_at"]?></td>
      <td>
        <button class="btn btn-danger" style="height:40px" onclick="deleteStudent(<?=$row['user_id']?>)">Retrieve</button>
      </td>
    </tr>
    <?php
          $count=$count+1;
        }
    }
    ?>
  </table>
  
  <script>
    function deleteStudent(id) {
      if(confirm("Are you sure you want to retrieve this student?")) {
        $.ajax({
          url: "./adminView/retrieveStudent.php",
          method: "post",
          data: { id: id },
          success: function (data) {
            if (data === "success") {
              alert("Student retrieved successfully.");
              location.reload();
            } else {
              alert("Failed to retrieve student. Please try again.");
            }
          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
          }
        });
      }
    }
  </script>
</div>
