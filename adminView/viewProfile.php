<div class="w-100">
    <p class="text-2xl"><i class="fa fa-user-o" aria-hidden="true"></i> <span class="font-semibold text-2xl">Teacher:</span> Rojan Yepes</p>
    <div class="p-3 rounded-lg shadowed" style="padding-top:1rem; min-height: 100px; background-color:white">
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
                <tr class="cursor-pointer tr_hoverable">
                    <td>ITEL 111</td>
                    <td>7:00 AM</td>
                    <td>9:00 AM</td>
                    <td>Room 201</td>
                </tr>
            </tbody>
        </table>
        <p id="currentTime" style="text-align: right;" class="w-100 text-xs mt-4"></p>
    </div>
    <hr />
    <div class="p-3 rounded-lg shadowed flex justify-evenly" style="padding-top:1rem; min-height: 100px; background-color:white">
        <table class="styled-table" style="width:80%">
            <tbody>
                <tr>
                    <td>
                        <select class="input_border_b bg-transparent" style="width: 100%" id="subjectSelect">
                            <option>Select Subject</option>
                            <option value="ICT111">ICT 111</option>
                        </select>
                    </td>
                    <td><input placeholder="start time" class="timepick input_border_b bg-transparent" type="text"></td>
                    <td><input placeholder="end time" class="timepick input_border_b bg-transparent" type="text"></td>
                    <td><input placeholder="room" class="input_border_b bg-transparent" type="text"></td>
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
            <button class="w-100 my-2">Add</button>
            <button class="w-100 my-2">Delete</button>
        </div>
    </div>
    <script>
        console.log("Runs")
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

        $("#subjectSelect").select2();
    </script>
</div>