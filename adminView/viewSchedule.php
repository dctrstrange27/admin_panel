<div class="main-container">
  <div class="head">
    <select class="subject" name="subject">
      <option value="">Select a Subject</option>
      <?php
      include_once "../config/dbconnect.php";
      $sql = "SELECT * FROM subject";
      $result = mysqli_query($conn, $sql);

      // Create dropdown menu options
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<option value='" . $row['subject_code'] . "'>" . $row['subject_code'] . " - " . $row['subject_name'] . "</option>";
        }
      } else {
        echo "No data found.";
      }
      ?>

    </select>
    <button class="bt1">Okay</button>
  </div>
  <div class="main-body">
    <div class="body-one">
      <table>
        <thead>
          <tr>
            <th class="start-field">Time Start</th>
            <th>Time End</th>
            <th class="room-field">Room</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>10:00</td>
            <td>11:00</td>
            <td>Room 1</td>
          </tr>
          <tr>
            <td>11:00</td>
            <td>12:00</td>
            <td>Room 2</td>
          </tr>
          <tr>
            <td>12:00</td>
            <td>13:00</td>
            <td>Room 3</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="body-two">
      <button class="bt2">Open Log</button>
      <button class="bt3">End Class</button>
    </div>
  </div>
</div>