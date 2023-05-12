<?php
include_once "../config/dbconnect.php";

$currentUserId = 8; // replace this in future with current signed in user

$sql = "SELECT * FROM accounts WHERE `type`='professor' AND `id`=$currentUserId";
$currentProfessor = ($conn->query($sql))->fetch_assoc();

$sql = "SELECT * FROM schedule"; // missing foreign key columns for professor id and subject id in database
$schedules = $conn->query($sql);

$sql = "SELECT * FROM subject";
$subjects = $conn->query($sql);

$sql = "SELECT * FROM rooms";
$rooms = $conn->query($sql);
?>

<div class="w-100">
    <p class="text-2xl"><i class="fa fa-user-o" aria-hidden="true"></i> <span class="font-semibold text-2xl">Teacher: </span> <?= $currentProfessor["username"] ?></p>
    <div class="p-4 rounded-lg shadowed" style="padding-top:1rem; min-height: 100px; background-color:white">
        <table class="styled-table w-100 border-lg">
            <thead>
                <tr>
                    <th>Subject Code</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Room</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $schedules->fetch_assoc()) {
                ?>
                    <tr class="cursor-pointer tr_hoverable">
                        <td>subcode1</td>
                        <td><?= date('h:i A', strtotime($row["start_time"])) ?></td>
                        <td><?= date('h:i A', strtotime($row["end_time"])) ?></td>
                        <td>Room 201</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <p id="currentTime" style="text-align: right;" class="w-100 text-sm mt-4"></p>
    </div>
    <hr />
    <div class="p-4 rounded-lg shadowed flex justify-evenly" style="padding-top:1rem; min-height: 100px; background-color:white">
        <table class="styled-table" style="width:80%">
            <tbody>
                <tr>
                    <td>
                        <select id="subject" class="input_border_b bg-transparent selects" style="width: 100%">
                            <option></option>
                            <?php
                            while ($row = $subjects->fetch_assoc()) {
                                echo '<option value="' . $row["id"] . '">' . $row["subject_code"] . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                    <td><input id="startime" placeholder="start time" class="timepick input_border_b bg-transparent" type="text"></td>
                    <td><input id="endtime" placeholder="end time" class="timepick input_border_b bg-transparent" type="text"></td>
                    <td>
                        <select id="room" class="input_border_b bg-transparent selects" style="min-width: 100px;">
                            <option></option>
                            <?php
                            while ($row = $rooms->fetch_assoc()) {
                                echo '<option value="' . $row["Room_ID"] . '">SJB' . $row["Room"] . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">Subject Code</td>
                    <td class="text-center">Start Time</td>
                    <td class="text-center">End Time</td>
                    <td class="text-center">Room</td>
                </tr>
            </tbody>
        </table>
        <div class="p-4" style="width:20%">
            <button class="w-100 my-2 bt-2 btn_style btn-normal">Add</button>
            <button class="w-100 my-2 bt-2 btn_style btn-err">Delete</button>
        </div>
    </div>
    <script>
        printCurTime = () => {
            date = new Date();
            result = `<i class="fa fa-calendar" aria-hidden="true"></i> ${new Date().toLocaleString('en-US', { weekday : 'long', month : 'long', day : 'numeric', year : 'numeric', hour : 'numeric', minute : 'numeric'})}`
            document.getElementById('currentTime').innerHTML = result;
            setTimeout('printCurTime()', 1000);
            return true;
        }
        printCurTime();

        $('.timepick').timepicker({
            timeFormat: 'h:mm p',
            interval: 1,
            minTime: '12:00am',
            maxTime: '11:59pm',
            defaultTime: '12:00am',
            startTime: '12',
            dynamic: false,
            dropdown: true,
            scrollbar: false
        });

        $(".selects").select2();
    </script>
</div>