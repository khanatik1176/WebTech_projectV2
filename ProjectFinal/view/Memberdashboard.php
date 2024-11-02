<?php
require_once("../model/AdminModel.php");

if ($_SESSION["Role"] != 'Member' || $_SESSION["Role"] == "") {
  header("location: ../view/userLogin.php");
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="../asset/css/Memberdashboard.css" />
  <script src="../asset/js/ReceverHisAjax.js"></script>
  <link rel="stylesheet" href="../asset/search-layout.css">
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Member Dashboard</title>
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class="bx bxl-grid-alt"></i>
      <span class="logo_name">Parcel Management</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="viewprofile.php" class="active">
          <i class="bx bx-grid-alt"></i>
          <span class="links_name">View Profile</span>
        </a>
      </li>
      <li>
        <a href="percelmgt.php">
          <i class="bx bx-box"></i>
          <span class="links_name">Parcel MGT Panel</span>
        </a>
      </li>
      <li>
        <a href="percelHistory.php">
          <i class="bx bx-list-ul"></i>
          <span class="links_name"> Parcel History</span>
        </a>
      </li>
      <li>
        <a href="parceltrack.php">
          <i class="bx bx-pie-chart-alt-2"></i>
          <span class="links_name">Parcel Tracker</span>
        </a>
      </li>
      <li>
        <a href="invoice.php">
          <i class="bx bx-coin-stack"></i>
          <span class="links_name">Invoice</span>
        </a>
      </li>
      <li>
        <a href="updatepayment.php">
          <i class="bx bx-book-alt"></i>
          <span class="links_name">Update Payment Option</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-message"></i>
          <span class="links_name">MESSAGING SYSTEM</span>
        </a>
      </li>
      <li>
        <a href="ComplainPanel.php">
          <i class="bx bx-cog"></i>
          <span class="links_name">COMPLAIN PANEL</span>
        </a>
      </li>
      <li>
        <a href="memberNotification.php">
          <i class="bx bx-cog"></i>
          <span class="links_name">NOTIFICATION PANEL</span>
        </a>
      </li>
      <li>
        <a href="faq.php">
          <i class="bx bx-cog"></i>
          <span class="links_name">FAQ PANEL</span>
        </a>
      </li>
      <li class="log_out">
        <a href="../controller/logoutChecker.php">
          <i class="bx bx-log-out"></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
        <span class="dashboard">
          <h2 align="center">Welcome
            <?php echo $_SESSION['Username'] ?>
          </h2>
        </span>
      </div>
      <div class="Search-div">
                    <form method="post" class="TrackForm">
                        <h3 class="Track-Header">Receiver History</h3>
                        <input type="text" id="track" oninput="ReceiverHistory()"
                            placeholder="Please provide the data here !">
                        <div class="result-divt hide"></div>
                    </form>
      </div>
    </nav>

    </div>
    </div>
  </section>
  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    };
  </script>
  
</body>

</html>