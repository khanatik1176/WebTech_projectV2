<?php session_start();

if ($_SESSION["Role"] != 'Admin' || $_SESSION["Role"] == "") {
  header("location: ../view/userLogin.php");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="../asset/AdminDashBoardstyle.css" />
  <link rel="stylesheet" href="../asset/search-layout.css" />
  <script src="../asset/js/admin_liveSearch-Ajax.js"></script>
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class="bx bx-grid-alt"></i>
      <span class="logo_name">Parcel Management</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="viewadmin.php" class="active">
          <i class="bx bx-grid-alt"></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="./AdminPanel/viewUserPanel.php">
          <i class="bx bx-box"></i>
          <span class="links_name">User Panel</span>
        </a>
      </li>
      <li>
        <a href="./AdminPanel/viewDeliverymanPanel.php">
          <i class="bx bx-list-ul"></i>
          <span class="links_name">DeliveryMan Panel</span>
        </a>
      </li>
      <li>
        <a href="./parcelmanagementPanel.php">
          <i class="bx bx-pie-chart-alt-2"></i>
          <span class="links_name">Parcel MGT Panel</span>
        </a>
      </li>
      <li>
        <a href="./AdminPanel/deliverypanel.php">
          <i class="bx bx-coin-stack"></i>
          <span class="links_name">DELIVERY PANEL</span>
        </a>
      </li>
      <li>
        <a href="./AdminPanel/inventoryPanel.php">
          <i class="bx bx-book-alt"></i>
          <span class="links_name">INVENTORY PANEL</span>
        </a>
      </li>
      <li>
        <a href="./AdminPanel/careerPanel.php">
          <i class="bx bx-user"></i>
          <span class="links_name">CAREER PANEL</span>
        </a>
      </li>
      <li>
        <a href="../view/AdminPanel/ComplainMember.php">
          <i class="bx bx-message"></i>
          <span class="links_name">MEMBER COMPLAIN</span>
        </a>
      </li>
      <li>
        <a href="./receiverHistory.php">
          <i class="bx bx-heart"></i>
          <span class="links_name">RECEIVER HISTORY</span>
        </a>
      </li>
      <li>
      <a href="../view/AdminPanel/adminDeliComplain.php">
          <i class="bx bx-heart"></i>
          <span class="links_name">DELIVERYMAN COMPLAINS</span>
        </a>
      </li>
      <li>
      <a href="../view/banpanel.php">
          <i class="bx bx-heart"></i>
          <span class="links_name">Ban Member</span>
        </a>
      </li>
      <li>
        <a href="./AdminPanel/notificationPanel.php">
          <i class="bx bx-cog"></i>
          <span class="links_name">NOTIFICATION PANEL</span>
        </a>
      </li>
      <li>
        <a href="./fileuploadpanel.php">
        <i class="bx bx-message"></i>
          <span class="links_name">FILE UPLOAD PANEL</span>
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
        <div class = "Search-div">
                            <form method="post"  class="SearchForm" >
                            <h3 class="Search-Header">Search</h3>
                            <input type="text"  id="Search" oninput="search()" placeholder="Please provide the data here !">
                            <div class="result-div hide"></div>
                            <br>
                            <br>
                            <br>
                            </form>
        </div>

      
    </nav>
    </div>
    </div>
    <div>
      

    
    </div>
  </section>


  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }

  </script>
</body>

</html>