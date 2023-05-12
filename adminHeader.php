<?php
   session_start();
   include_once "./config/dbconnect.php";

   if(isset($_POST['logout']) && $_POST['logout'] == 'yes') {
  echo "Logging out...";
  unset($_SESSION['user_id']);
  header('Location: /CAPSTONE/Landingpage.php');
  exit();
}
?>
</style>
 <nav class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #3B3131;">
    
    <a class="navbar-brand ml-5" href="./index.php">
        <img src="./assets/images/q.png" width="80" height="80" alt="Swiss Collection">
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
  <div class="border p-3 rounded" onclick="confirmLogout()">
  <div class="fa fa-sign-out fa-3x text-white"></div>
</div>

<script>
function confirmLogout() {
    if (confirm("Are you sure you want to logout?")) {
        window.location.href = "/AASMUBEN/Index.php";
    }
}
</script>
</nav>
