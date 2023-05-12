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
<nav class="nav">
    <div class="nav-inside" >
      <a href="./index.php">
      <img class="logo" src="./assets/images/q.png" width="80" height="80" alt="Swiss Collection">
      </a>
        <p class="logo-label">University of Caloocan City</p>
</div>
  <div class="" onclick="confirmLogout()">
  <div class="signout">
  <div class="icon fa fa-sign-out"></div>
  </div>
</div>

<script>
function confirmLogout() {
    if (confirm("Are you sure you want to logout?")) {
        window.location.href = "/AASMUBEN/Index.php";
    }
}
</script>
</nav>
