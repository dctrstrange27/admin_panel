
  <div class="main-container">
    <div class="head">
      <select class="subject" name="subject">
        <option value="">Select a Subject</option>
        <?php
        $subjects = array(
          "Math" => "MTH101",
          "Science" => "SCN111",
          "English" => "ENG201",
          "History" => "HIS301",
          "Art" => "ART401"
        );
        foreach ($subjects as $subject => $code) {
          echo '<option value="' . $code . '">' . $subject . ' - ' . $code . '</option>';
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

