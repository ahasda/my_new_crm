<?php

// Enable error reporting for development
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// Check if the user is logged in
if (!isset($_SESSION['aemail'])) {
  // Alert the user and redirect to the login page
  echo "<script>alert('You must log in first');window.location.href='login.php';</script>";
  exit();
}



?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themepixels.me/demo/bracket/app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Aug 2024 09:24:46 GMT -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels">

  <title>Bracket Responsive Bootstrap 4 Admin Template</title>

  <!-- vendor css -->
  <!-- <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
  <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link href="../lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
  <link href="../lib/rickshaw/rickshaw.min.css" rel="stylesheet">
  <!-- <link href="../lib/chartist/chartist.css" rel="stylesheet"> -->

  <!-- pagination cdn  -->
  <link rel="stylesheet" href="//cdn.datatables.net/2.1.3/css/dataTables.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.1.1/css/buttons.dataTables.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.css">

  <!-- Bracket CSS -->
  <link rel="stylesheet" href="../css/bracket.css">

  <style>
    td {
      color: black !important;
    }
  </style>

</head>

<body>
  <!-- ########## START: HEAD PANEL ########## -->
  <div class="br-header">

    <div class="br-header-left">
      <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="fa-solid fa-bars"></i></a>
      </div>
      <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i
            class="icon ion-navicon-round"></i></a></div>
      <!-- input-group -->
    </div><!-- br-header-left -->

    <div class="br-header-right">
      <nav class="nav">
        <div class="dropdown">

          <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
            <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
              <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Messages</label>
              <a href="#" class="tx-11">+ Add New Message</a>
            </div><!-- d-flex -->

            <div class="media-list">
              <!-- loop starts here -->
              <a href="#" class="media-list-link">
                <div class="media pd-x-20 pd-y-15">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                      <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Donna Seay</p>
                      <span class="tx-11 tx-gray-500">2 minutes ago</span>
                    </div><!-- d-flex -->
                    <p class="tx-12 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these
                      sweet mornings of spring.</p>
                  </div>
                </div><!-- media -->
              </a>
              <!-- loop ends here -->
              <a href="#" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                      <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Samantha Francis</p>
                      <span class="tx-11 tx-gray-500">3 hours ago</span>
                    </div><!-- d-flex -->
                    <p class="tx-12 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                  </div>
                </div><!-- media -->
              </a>
              <a href="#" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                      <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Robert Walker</p>
                      <span class="tx-11 tx-gray-500">5 hours ago</span>
                    </div><!-- d-flex -->
                    <p class="tx-12 mg-b-0">I should be incapable of drawing a single stroke at the present moment...
                    </p>
                  </div>
                </div><!-- media -->
              </a>
              <a href="#" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                      <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Larry Smith</p>
                      <span class="tx-11 tx-gray-500">Yesterday</span>
                    </div><!-- d-flex -->
                    <p class="tx-12 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian
                      sun strikes...</p>
                  </div>
                </div><!-- media -->
              </a>
              <div class="pd-y-10 tx-center bd-t">
                <a href="#" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Messages</a>
              </div>
            </div><!-- media-list -->
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <div class="dropdown">

          <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
            <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
              <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Notifications</label>
              <a href="#" class="tx-11">Mark All as Read</a>
            </div><!-- d-flex -->


          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <div class="dropdown">
          <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
            <h3 class="logged-name hidden-md-down"><?= $_SESSION['aname']; ?></h3>
            <img src="http://via.placeholder.com/64x64" class="wd-32 rounded-circle" alt="">
            <span class="square-10 bg-success"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-header wd-200">
            <ul class="list-unstyled user-profile-nav">
              <li><a href="#"><i class="icon ion-ios-person"></i> Edit Profile</a></li>
              <li><a href="#"><i class="icon ion-ios-gear"></i> Settings</a></li>
              <li><a href="#"><i class="icon ion-ios-download"></i> Downloads</a></li>
              <li><a href="#"><i class="icon ion-ios-star"></i> Favorites</a></li>
              <li><a href="#"><i class="icon ion-ios-folder"></i> Collections</a></li>
              <li><a href="#"><i class="icon ion-power"></i> Sign Out</a></li>
            </ul>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </nav>
      <div class="navicon-right">
        <a id="btnRightMenu" href="#" class="pos-relative"><i class="fa-solid fa-bars"></i></a>
      </div><!-- navicon-right -->
    </div><!-- br-header-right -->
  </div><!-- br-header -->
  <!-- ########## END: HEAD PANEL ########## -->

  <!-- ########## START: LEFT PANEL ########## -->
  <div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>


    <div class="br-sideleft-menu">
      <a href="index.html" class="br-menu-link active">
        <div class="br-menu-item">
          <i class="fa-solid fa-gauge"></i>
          <a href="index.php"><span class="menu-item-label">Dashboard</span></a>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->


      <a href="card-dashboard.html" class="br-menu-link">
        <div class="br-menu-item">
          <i class="fa-solid fa-chart-line"></i>
          <a href="height.php"><span class="menu-item-label">Chart</span></a>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->


    </div><!-- br-sideleft-menu -->

    <label class="sidebar-label pd-x-15 mg-t-25 mg-b-20 tx-info op-9">Information Summary</label>

    <div class="info-list">
      <div class="d-flex align-items-center justify-content-between pd-x-15">
        <div>
          <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Memory Usage</p>
          <h5 class="tx-lato tx-white tx-normal mg-b-0">32.3%</h5>
        </div>
        <span class="peity-bar"
          data-peity='{ "fill": ["#336490"], "height": 35, "width": 60 }'>8,6,5,9,8,4,9,3,5,9</span>
      </div><!-- d-flex -->

      <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
        <div>
          <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">CPU Usage</p>
          <h5 class="tx-lato tx-white tx-normal mg-b-0">140.05</h5>
        </div>
        <span class="peity-bar"
          data-peity='{ "fill": ["#1C7973"], "height": 35, "width": 60 }'>4,3,5,7,12,10,4,5,11,7</span>
      </div><!-- d-flex -->

      <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
        <div>
          <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Disk Usage</p>
          <h5 class="tx-lato tx-white tx-normal mg-b-0">82.02%</h5>
        </div>
        <span class="peity-bar"
          data-peity='{ "fill": ["#8E4246"], "height": 35, "width": 60 }'>1,2,1,3,2,10,4,12,7</span>
      </div><!-- d-flex -->

      <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
        <div>
          <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Daily Traffic</p>
          <h5 class="tx-lato tx-white tx-normal mg-b-0">62,201</h5>
        </div>
        <span class="peity-bar"
          data-peity='{ "fill": ["#9C7846"], "height": 35, "width": 60 }'>3,12,7,9,2,3,4,5,2</span>
      </div><!-- d-flex -->
    </div><!-- info-lst -->

    <br>
  </div><!-- br-sideleft -->
  <!-- ########## END: LEFT PANEL ########## -->





  <!-- ########## START: RIGHT PANEL ########## -->
  <div class="br-sideright">
    <ul class="nav nav-tabs sidebar-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" role="tab" href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
      </li>
    </ul><!-- sidebar-tabs -->



  </div><!-- br-sideright -->
  <!-- ########## END: RIGHT PANEL ########## --->

  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="pd-30">
      <h4 class="tx-gray-800 mg-b-5"><img src="../img/litem_logo.png" alt="" class="img-fluid" style="height: 80px; width: 180px;"></h4>
      <p class="mg-b-0">Here Are All Data Of CRM</p>
    </div><!-- d-flex -->

    <div class="br-pagebody mg-t-5 pd-x-30">
      <div class="row row-sm">
        <?php
        $mysqli = mysqli_connect("localhost", "root", "", "crm_data");

        // Check connection
        if ($mysqli->connect_error) {
          die("Connection failed: " . $mysqli->connect_error);
        }

        // SQL query to fetch month-wise visit count
        $sql = "SELECT COUNT(*) AS visit_count, DATE_FORMAT(`date`, '%Y-%m') AS month_year 
        FROM `main_table` 
        GROUP BY month_year 
        ORDER BY month_year DESC;";

        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
          // Loop through all the rows
          while ($row = $result->fetch_assoc()) {
            $visit_count = $row['visit_count'];
            $month_year = $row['month_year'];
            // echo "Month: " . $month_year . " - Visits: " . $visit_count . "<br>";

        ?>
            <div class="col-sm-6 col-md-4 mg-t-20 mg-sm-t-0">
              <div class="bg-teal rounded overflow-hidden">
                <div class="pd-25 d-flex align-items-center">
                  <i class="fa-solid fa-database tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">

                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Visits</p>
                    <span class="tx-20 tx-roboto tx-white-6"><?= $visit_count ?></span>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"><?= $month_year ?></p>
        
                  </div>
                </div>
              </div>
            </div>
            <?php

}
} else {
echo "No data found.";
}

$mysqli->close();

  ?>


      </div>
      <div class="row row-sm mg-t-20">
        <div class="col-12">

          <table id="myTable" class="display" class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Message</th>
                <th scope="col">State</th>
                <th scope="col">Qtype</th>
                <th scope="col">Title</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>


            <tbody>
              <?php

              // session_start();
              if (empty($_SESSION['csrf_token'])) {
                $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
              }

              $conn = mysqli_connect("localhost", "root", "", "crm_data");

              if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }

              $query = mysqli_query($conn, "SELECT `mid`,`name`,`email`,`phone`,`message`,`state`,`q_type`,`title_name`,`date` FROM `main_table` ORDER BY date DESC");

              if ($query) {
                while ($row = mysqli_fetch_assoc($query)) {

                  $record_id = $row['mid'];

                  echo "<tr>";
                  echo "<td>" . ++$record_id . "</td>";
                  echo "<td>" . $row['name'] . "</td>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo "<td>" . $row['phone'] . "</td>";
                  echo "<td>" . $row['message'] . "</td>";
                  echo "<td>" . $row['state'] . "</td>";
                  echo "<td>" . $row['q_type'] . "</td>";
                  echo "<td>" . $row['title_name'] . "</td>";
                  echo "<td>" . $row['date'] . "</td>";
                  echo "<td class='text-center'>
    <div class='d-flex justify-content-center'> 
        <form action='delete.php' method='POST' style='display:inline;' class='me-2'> <!-- Add margin between buttons -->
            <input type='hidden' name='id' value='<?= $record_id; ?>'>
            <input type='hidden' name='csrf_token' value='<?= ." . $_SESSION['csrf_token'] . ".; ?>'>
            <button type='submit' class='btn btn-danger btn-sm'> <!-- Use btn-sm for smaller buttons -->
                <i class='fa-solid fa-trash'></i>
            </button>
        </form>

        <form action='duplicate.php' method='POST' style='display:inline;' class='me-2'> <!-- Add margin between buttons -->
            <input type='hidden' name='id' value='<?= $record_id; ?>'>
            <button type='submit' class='btn btn-success btn-sm'>
                <i class='fa-solid fa-copy'></i>
            </button>
        </form>

        <form action='edit.php' method='POST' style='display:inline;'>
            <input type='hidden' name='id' value='<?= $record_id; ?>'>
            <button type='submit' class='btn btn-primary btn-sm'> <!-- Corrected 'btn-primary' class -->
                <i class='fa-solid fa-pen-to-square'></i>
            </button>
        </form>

    </div>
</td>";
                  echo "</tr>";
                }
              }
              ?>

            </tbody>
          </table>

        </div>
        <div class="col-12">



        </div>
      </div>

    </div>


    <footer class="br-footer">
      <div class="footer-left">
        <div class="mg-b-2">Copyright &copy; 202.</div>
        <div>Litem | Get your Legal Solutions | Contact us:+91 7409697047</div>
      </div>
      <div class="footer-right d-flex align-items-center">
        <span class="tx-uppercase mg-r-10">Share:</span>
        <a target="_blank" class="pd-x-5"
          href=""><i class="fa-brands fa-facebook"></i></a>
        <a target="_blank" class="pd-x-5"
          href=""><i class="fa-brands fa-x-twitter"></i></a>
      </div>
    </footer>
  </div><!-- br-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->

  <script src="../lib/jquery/jquery.js"></script>
  <!-- pagination data  -->
  <script src="//cdn.datatables.net/2.1.3/js/dataTables.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.1.1/js/dataTables.buttons.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.dataTables.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.print.min.js"></script>


  <script>
    // let table = new DataTable('#myTable');
    new DataTable('#myTable', {
      layout: {
        topStart: {
          buttons: ['csv', 'excel', 'pdf']
        }
      }
    });
  </script>



  <script src="../js/bracket.js"></script>
  <script src="../js/ResizeSensor.js"></script>
  <script src="../js/dashboard.js"></script>
  <script>
    $(function() {
      'use strict'

      // FOR DEMO ONLY
      // menu collapsed by default during first page load or refresh with screen
      // having a size between 992px and 1299px. This is intended on this page only
      // for better viewing of widgets demo.
      $(window).resize(function() {
        minimizeMenu();
      });

      minimizeMenu();

      function minimizeMenu() {
        if (window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
          // show only the icons and hide left menu label by default
          $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
          $('body').addClass('collapsed-menu');
          $('.show-sub + .br-menu-sub').slideUp();
        } else if (window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
          $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
          $('body').removeClass('collapsed-menu');
          $('.show-sub + .br-menu-sub').slideDown();
        }
      }
    });
  </script>
</body>

<!-- Mirrored from themepixels.me/demo/bracket/app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Aug 2024 09:24:48 GMT -->

</html>