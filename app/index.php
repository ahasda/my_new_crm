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
          <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
            <i class="icon ion-ios-email-outline tx-24"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
            <!-- end: if statement -->
          </a>
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
          <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
            <i class="icon ion-ios-bell-outline tx-24"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
            <!-- end: if statement -->
          </a>
          <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
            <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
              <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Notifications</label>
              <a href="#" class="tx-11">Mark All as Read</a>
            </div><!-- d-flex -->

            <div class="media-list">
              <!-- loop starts here -->
              <a href="#" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong>
                      tagged you and 18 others in a post.</p>
                    <span class="tx-12">October 03, 2017 8:45am</span>
                  </div>
                </div><!-- media -->
              </a>
              <!-- loop ends here -->
              <a href="#" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong>
                      appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                    <span class="tx-12">October 02, 2017 12:44am</span>
                  </div>
                </div><!-- media -->
              </a>
              <a href="#" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong
                        class="tx-medium tx-gray-800">Sale Group</strong></p>
                    <span class="tx-12">October 01, 2017 10:20pm</span>
                  </div>
                </div><!-- media -->
              </a>
              <a href="#" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong>
                      wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie
                        Mara</strong></p>
                    <span class="tx-12">October 01, 2017 6:08pm</span>
                  </div>
                </div><!-- media -->
              </a>
              <div class="pd-y-10 tx-center bd-t">
                <a href="#" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
              </div>
            </div><!-- media-list -->
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <div class="dropdown">
          <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
            <span class="logged-name hidden-md-down">Katherine</span>
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
        <a id="btnRightMenu" href="#" class="pos-relative">
          <i class="icon ion-ios-chatboxes-outline"></i>
          <!-- start: if statement -->
          <span class="square-8 bg-danger pos-absolute t-10 r--5 rounded-circle"></span>
          <!-- end: if statement -->
        </a>
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
          <span class="menu-item-label">Dashboard</span>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      
      
      <a href="card-dashboard.html" class="br-menu-link">
        <div class="br-menu-item">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
          <span class="menu-item-label">Chart</span>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      
   
      <a href="#" class="br-menu-link">
        <div class="br-menu-item">
          <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
          <span class="menu-item-label">Tables</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="table-basic.html" class="nav-link">Basic Table</a></li>
        <li class="nav-item"><a href="table-datatable.html" class="nav-link">Data Table</a></li>
      </ul>


  
      
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
        <a class="nav-link active" data-toggle="tab" role="tab" href="#contacts"><i
            class="icon ion-ios-contact-outline tx-24"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" role="tab" href="#attachments"><i
            class="icon ion-ios-folder-outline tx-22"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" role="tab" href="#calendar"><i
            class="icon ion-ios-calendar-outline tx-24"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" role="tab" href="#settings"><i
            class="icon ion-ios-gear-outline tx-24"></i></a>
      </li>
    </ul><!-- sidebar-tabs -->

    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto active" id="contacts" role="tabpanel">
        <label class="sidebar-label pd-x-25 mg-t-25">Online Contacts</label>
        <div class="contact-list pd-x-10">
          <a href="#" class="contact-list-link new">
            <div class="d-flex">
              <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-success"></div>
              </div>
              <div class="contact-person">
                <p class="mg-b-0">Marilyn Tarter</p>
                <span class="tx-12 op-5 d-inline-block">Clemson, CA</span>
              </div>
              <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1 new</span>
            </div><!-- d-flex -->
          </a><!-- contact-list-link -->
          <a href="#" class="contact-list-link">
            <div class="d-flex">
              <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-success"></div>
              </div>
              <div class="contact-person">
                <p class="mg-b-0 ">Belinda Connor</p>
                <span class="tx-12 op-5 d-inline-block">Fort Kent, ME</span>
              </div>
            </div><!-- d-flex -->
          </a><!-- contact-list-link -->
          <a href="#" class="contact-list-link new">
            <div class="d-flex">
              <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-success"></div>
              </div>
              <div class="contact-person">
                <p class="mg-b-0">Britanny Cevallos</p>
                <span class="tx-12 op-5 d-inline-block">Shiboygan Falls, WI</span>
              </div>
              <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 3 new</span>
            </div><!-- d-flex -->
          </a><!-- contact-list-link -->
          <a href="#" class="contact-list-link new">
            <div class="d-flex">
              <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-success"></div>
              </div>
              <div class="contact-person">
                <p class="mg-b-0">Brandon Lawrence</p>
                <span class="tx-12 op-5 d-inline-block">Snohomish, WA</span>
              </div>
              <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1 new</span>
            </div><!-- d-flex -->
          </a><!-- contact-list-link -->
          <a href="#" class="contact-list-link">
            <div class="d-flex">
              <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-success"></div>
              </div>
              <div class="contact-person">
                <p class="mg-b-0">Andrew Wiggins</p>
                <span class="tx-12 op-5 d-inline-block">Springfield, MA</span>
              </div>
            </div><!-- d-flex -->
          </a><!-- contact-list-link -->
          <a href="#" class="contact-list-link">
            <div class="d-flex">
              <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-success"></div>
              </div>
              <div class="contact-person">
                <p class="mg-b-0">Theodore Gristen</p>
                <span class="tx-12 op-5 d-inline-block">Nashville, TN</span>
              </div>
            </div><!-- d-flex -->
          </a><!-- contact-list-link -->
          <a href="#" class="contact-list-link">
            <div class="d-flex">
              <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-success"></div>
              </div>
              <div class="contact-person">
                <p class="mg-b-0">Deborah Miner</p>
                <span class="tx-12 op-5 d-inline-block">North Shore, CA</span>
              </div>
            </div><!-- d-flex -->
          </a><!-- contact-list-link -->
        </div><!-- contact-list -->


        <label class="sidebar-label pd-x-25 mg-t-25">Offline Contacts</label>
        <div class="contact-list pd-x-10">
          <a href="#" class="contact-list-link">
            <div class="d-flex">
              <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-gray-500"></div>
              </div>
              <div class="contact-person">
                <p class="mg-b-0">Marilyn Tarter</p>
                <span class="tx-12 op-5 d-inline-block">Clemson, CA</span>
              </div>
            </div><!-- d-flex -->
          </a><!-- contact-list-link -->
          <a href="#" class="contact-list-link">
            <div class="d-flex">
              <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-gray-500"></div>
              </div>
              <div class="mg-l-10">
                <p class="mg-b-0">Belinda Connor</p>
                <span class="tx-12 op-5 d-inline-block">Fort Kent, ME</span>
              </div>
            </div><!-- d-flex -->
          </a><!-- contact-list-link -->
          <a href="#" class="contact-list-link">
            <div class="d-flex">
              <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-gray-500"></div>
              </div>
              <div class="contact-person">
                <p class="mg-b-0">Britanny Cevallos</p>
                <span class="tx-12 op-5 d-inline-block">Shiboygan Falls, WI</span>
              </div>
            </div><!-- d-flex -->
          </a><!-- contact-list-link -->
          <a href="#" class="contact-list-link">
            <div class="d-flex">
              <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-gray-500"></div>
              </div>
              <div class="contact-person">
                <p class="mg-b-0">Brandon Lawrence</p>
                <span class="tx-12 op-5 d-inline-block">Snohomish, WA</span>
              </div>
            </div><!-- d-flex -->
          </a><!-- contact-list-link -->
          <a href="#" class="contact-list-link">
            <div class="d-flex">
              <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-gray-500"></div>
              </div>
              <div class="contact-person">
                <p class="mg-b-0">Andrew Wiggins</p>
                <span class="tx-12 op-5 d-inline-block">Springfield, MA</span>
              </div>
            </div><!-- d-flex -->
          </a><!-- contact-list-link -->
          <a href="#" class="contact-list-link">
            <div class="d-flex">
              <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-gray-500"></div>
              </div>
              <div class="contact-person">
                <p class="mg-b-0">Theodore Gristen</p>
                <span class="tx-12 op-5 d-inline-block">Nashville, TN</span>
              </div>
            </div><!-- d-flex -->
          </a><!-- contact-list-link -->
          <a href="#" class="contact-list-link">
            <div class="d-flex">
              <div class="pos-relative">
                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                <div class="contact-status-indicator bg-gray-500"></div>
              </div>
              <div class="contact-person">
                <p class="mg-b-0">Deborah Miner</p>
                <span class="tx-12 op-5 d-inline-block">North Shore, CA</span>
              </div>
            </div><!-- d-flex -->
          </a><!-- contact-list-link -->
        </div><!-- contact-list -->

      </div><!-- #contacts -->


      <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="attachments" role="tabpanel">
        <label class="sidebar-label pd-x-25 mg-t-25">Recent Attachments</label>
        <div class="media-file-list">
          <div class="media">
            <div class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
              <i class="fa fa-file-image-o tx-28 tx-white"></i>
            </div>
            <div class="media-body">
              <p class="mg-b-0 tx-13">IMG_43445</p>
              <p class="mg-b-0 tx-12 op-5">JPG Image</p>
              <p class="mg-b-0 tx-12 op-5">1.2mb</p>
            </div><!-- media-body -->
            <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
          </div><!-- media -->
          <div class="media mg-t-20">
            <div class="pd-10 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
              <i class="fa fa-file-video-o tx-28 tx-white"></i>
            </div>
            <div class="media-body">
              <p class="mg-b-0 tx-13">VID_6543</p>
              <p class="mg-b-0 tx-12 op-5">MP4 Video</p>
              <p class="mg-b-0 tx-12 op-5">24.8mb</p>
            </div><!-- media-body -->
            <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
          </div><!-- media -->
          <div class="media mg-t-20">
            <div class="pd-10 bg-success wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
              <i class="fa fa-file-word-o tx-28 tx-white"></i>
            </div>
            <div class="media-body">
              <p class="mg-b-0 tx-13">Tax_Form</p>
              <p class="mg-b-0 tx-12 op-5">Word Document</p>
              <p class="mg-b-0 tx-12 op-5">5.5mb</p>
            </div><!-- media-body -->
            <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
          </div><!-- media -->
          <div class="media mg-t-20">
            <div class="pd-10 bg-warning wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
              <i class="fa fa-file-pdf-o tx-28 tx-white"></i>
            </div>
            <div class="media-body">
              <p class="mg-b-0 tx-13">Getting_Started</p>
              <p class="mg-b-0 tx-12 op-5">PDF Document</p>
              <p class="mg-b-0 tx-12 op-5">12.7mb</p>
            </div><!-- media-body -->
            <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
          </div><!-- media -->
          <div class="media mg-t-20">
            <div class="pd-10 bg-warning wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
              <i class="fa fa-file-pdf-o tx-28 tx-white"></i>
            </div>
            <div class="media-body">
              <p class="mg-b-0 tx-13">Introduction</p>
              <p class="mg-b-0 tx-12 op-5">PDF Document</p>
              <p class="mg-b-0 tx-12 op-5">7.7mb</p>
            </div><!-- media-body -->
            <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
          </div><!-- media -->
          <div class="media mg-t-20">
            <div class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
              <i class="fa fa-file-image-o tx-28 tx-white"></i>
            </div>
            <div class="media-body">
              <p class="mg-b-0 tx-13">IMG_43420</p>
              <p class="mg-b-0 tx-12 op-5">JPG Image</p>
              <p class="mg-b-0 tx-12 op-5">2.2mb</p>
            </div><!-- media-body -->
            <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
          </div><!-- media -->
          <div class="media mg-t-20">
            <div class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
              <i class="fa fa-file-image-o tx-28 tx-white"></i>
            </div>
            <div class="media-body">
              <p class="mg-b-0 tx-13">IMG_43447</p>
              <p class="mg-b-0 tx-12 op-5">JPG Image</p>
              <p class="mg-b-0 tx-12 op-5">3.2mb</p>
            </div><!-- media-body -->
            <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
          </div><!-- media -->
          <div class="media mg-t-20">
            <div class="pd-10 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
              <i class="fa fa-file-video-o tx-28 tx-white"></i>
            </div>
            <div class="media-body">
              <p class="mg-b-0 tx-13">VID_6545</p>
              <p class="mg-b-0 tx-12 op-5">AVI Video</p>
              <p class="mg-b-0 tx-12 op-5">14.8mb</p>
            </div><!-- media-body -->
            <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
          </div><!-- media -->
          <div class="media mg-t-20">
            <div class="pd-10 bg-success wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
              <i class="fa fa-file-word-o tx-28 tx-white"></i>
            </div>
            <div class="media-body">
              <p class="mg-b-0 tx-13">Secret_Document</p>
              <p class="mg-b-0 tx-12 op-5">Word Document</p>
              <p class="mg-b-0 tx-12 op-5">4.5mb</p>
            </div><!-- media-body -->
            <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
          </div><!-- media -->
        </div><!-- media-list -->
      </div><!-- #history -->
      <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="calendar" role="tabpanel">
        <label class="sidebar-label pd-x-25 mg-t-25">Time &amp; Date</label>
        <div class="pd-x-25">
          <h2 id="brTime" class="tx-white tx-lato mg-b-5"></h2>
          <h6 id="brDate" class="tx-white tx-light op-3"></h6>
        </div>

        <label class="sidebar-label pd-x-25 mg-t-25">Events Calendar</label>
        <div class="datepicker sidebar-datepicker"></div>


        <label class="sidebar-label pd-x-25 mg-t-25">Event Today</label>
        <div class="pd-x-25">
          <div class="list-group sidebar-event-list mg-b-20">
            <div class="list-group-item">
              <div>
                <h6 class="tx-white tx-13 mg-b-5 tx-normal">Roven's 32th Birthday</h6>
                <p class="mg-b-0 tx-white tx-12 op-2">2:30PM</p>
              </div>
              <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- list-group-item -->
            <div class="list-group-item">
              <div>
                <h6 class="tx-white tx-13 mg-b-5 tx-normal">Regular Workout Schedule</h6>
                <p class="mg-b-0 tx-white tx-12 op-2">7:30PM</p>
              </div>
              <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- list-group-item -->
          </div><!-- list-group -->

          <a href="#" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">+ Add Event</a>
          <br>
        </div>

      </div>
      <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="settings" role="tabpanel">
        <label class="sidebar-label pd-x-25 mg-t-25">Quick Settings</label>

        <div class="pd-y-20 pd-x-25 tx-white">
          <h6 class="tx-13 tx-normal">Sound Notification</h6>
          <p class="op-5 tx-13">Play an alert sound everytime there is a new notification.</p>
          <div class="pos-relative">
            <input type="checkbox" name="checkbox" class="switch-button" checked>
          </div>
        </div>

        <div class="pd-y-20 pd-x-25 tx-white">
          <h6 class="tx-13 tx-normal">2 Steps Verification</h6>
          <p class="op-5 tx-13">Sign in using a two step verification by sending a verification code to your phone.</p>
          <div class="pos-relative">
            <input type="checkbox" name="checkbox2" class="switch-button">
          </div>
        </div>

        <div class="pd-y-20 pd-x-25 tx-white">
          <h6 class="tx-13 tx-normal">Location Services</h6>
          <p class="op-5 tx-13">Allowing us to access your location</p>
          <div class="pos-relative">
            <input type="checkbox" name="checkbox3" class="switch-button">
          </div>
        </div>

        <div class="pd-y-20 pd-x-25 tx-white">
          <h6 class="tx-13 tx-normal">Newsletter Subscription</h6>
          <p class="op-5 tx-13">Enables you to send us news and updates send straight to your email.</p>
          <div class="pos-relative">
            <input type="checkbox" name="checkbox4" class="switch-button" checked>
          </div>
        </div>

        <div class="pd-y-20 pd-x-25 tx-white">
          <h6 class="tx-13 tx-normal">Your email</h6>
          <div class="pos-relative">
            <input type="email" name="email" class="form-control form-control-inverse transition pd-y-10"
              value="janedoe@domain.com">
          </div>
        </div>

        <div class="pd-y-20 pd-x-25">
          <h6 class="tx-13 tx-normal tx-white mg-b-20">More Settings</h6>
          <a href="#" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Account Settings</a>
          <a href="#" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Privacy Settings</a>
        </div>

      </div>
    </div><!-- tab-content -->
  </div><!-- br-sideright -->
  <!-- ########## END: RIGHT PANEL ########## --->

  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="pd-30">
      <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>
      <p class="mg-b-0">Do big things with Bracket, the responsive bootstrap 4 admin template.</p>
    </div><!-- d-flex -->

    <div class="br-pagebody mg-t-5 pd-x-30">
      <div class="row row-sm">

        <div class="col-sm-6 col-xl-4">
          <div class="bg-teal rounded overflow-hidden">
            <div class="pd-25 d-flex align-items-center">
              <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
              <div class="mg-l-20">
                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Today's Visits</p>
                <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">1,975,224</p>
                <span class="tx-11 tx-roboto tx-white-6">24% higher yesterday</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-4 mg-t-20 mg-sm-t-0">
          <div class="bg-danger rounded overflow-hidden">
            <div class="pd-25 d-flex align-items-center">
              <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
              <div class="mg-l-20">
                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Today Sales</p>
                <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">$329,291</p>
                <span class="tx-11 tx-roboto tx-white-6">$390,212 before tax</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-4 mg-t-20 mg-xl-t-0">
          <div class="bg-primary rounded overflow-hidden">
            <div class="pd-25 d-flex align-items-center">
              <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
              <div class="mg-l-20">
                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">% Unique Visits</p>
                <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">54.45%</p>
                <span class="tx-11 tx-roboto tx-white-6">23% average duration</span>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="row row-sm mg-t-20">
        <div class="col-12">
          
          <table id="myTable" class="display" class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
          
        </div>
        <div class="col-12">

          <div class="card bg-transparent shadow-base bd-0 mg-t-20">
            <div class="bg-primary rounded-top">
              <div class="pd-x-30 pd-t-30">
                <h6 class="tx-13 tx-uppercase tx-white tx-semibold tx-spacing-1">Sale Status</h6>
                <p class="mg-b-20 tx-white-6">As of October 10 - 17, 2017</p>
                <h3 class="tx-lato tx-white mg-b-0">$12, 201 <i class="icon ion-android-arrow-up tx-white-5"></i></h3>
              </div>
              <div id="chartLine1" class="wd-100p ht-150"></div>
            </div>
            <div class="bg-white pd-20 rounded-bottom d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-start">
                <div><span id="sparkline6">5,4,7,5,9,7,4</span></div>
                <div class="mg-l-15">
                  <label class="tx-uppercase tx-10 tx-medium tx-spacing-1 mg-b-0">Average Sales</label>
                  <h6 class="tx-inverse mg-b-0 tx-lato tx-bold">$603, 201</h6>
                </div>
              </div><!-- d-flex -->
              <div class="d-flex align-items-center">
                <div><span id="sparkline7">4,7,5,9,4,7,5</span></div>
                <div class="mg-l-15">
                  <label class="tx-uppercase tx-10 tx-medium tx-spacing-1 mg-b-0">Total Sales</label>
                  <h6 class="tx-inverse mg-b-0 tx-lato tx-bold">$822, 677</h6>
                </div>
              </div><!-- d-flex -->
            </div>
          </div>
         
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
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        }
    }
});
</script>



  <script src="../js/bracket.js"></script>
  <script src="../js/ResizeSensor.js"></script>
  <script src="../js/dashboard.js"></script>
  <script>
    $(function () {
      'use strict'

      // FOR DEMO ONLY
      // menu collapsed by default during first page load or refresh with screen
      // having a size between 992px and 1299px. This is intended on this page only
      // for better viewing of widgets demo.
      $(window).resize(function () {
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