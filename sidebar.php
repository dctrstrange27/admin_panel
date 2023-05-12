<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
    <div class="side-header">
        <img src="./assets/images/q.png" width="120" height="120" alt="Swiss Collection"> 
        <h5 style="margin-top:10px;">Hello, Admin</h5>
    </div>
    <hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="./index.php"><i class="fa fa-home"></i> Dashboard</a>
    <a href="#Schedule" onclick="showSchedule()"><i class="fa fa-calendar"></i>Schedule</a>
    <a href="#" onclick="showStudents()"><i class="fa fa-users"></i>Profile</a>

</div>
 
<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>

<script>
    

function showSchedule() {
  $.ajax({
    url: "./adminView/viewSchedule.php",
    method: "post",
    data: { record: 1 },
    success: function (data) {
      $('.allContent-section').html(data);
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus, errorThrown);
    }
  });
}
</script>
