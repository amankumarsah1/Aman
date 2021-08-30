<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

  <style type="text/css">
		
		body{
			background:white;
		}
		#mainarea{
			width:900px;
			height:1000px;
			background:white;
			margin:0px auto;
			border:;
			border-radius:10px;
		}
		
		#mainarea h1{
			color:grey;
			text-shadow:-5px -2px 3px black,-7px -2px 3px grey;
			text-align:center;
		}
		
		#mainarea u{
			color:grey;
			text-shadow:-5px -2px 3px black,-7px -2px 3px grey;
			text-align:center;
		}
		
		.aarea{
			width:200px;
			height:40px;
			float:left;
			margin:0px 12px 0px 38px;
			color:;
		}
		
		.barea{
			width:600px;
			height:40px;
			float:left;
			margin:0px 38px 20px 12px;
			color:;
		}
		
		.carea{
			width:200px;
			height:30px;
			float:left;
				
		}
			
		.darea{
			width:630px;
			height:40px;
			float:left;
			margin-left:38px;
			color:;
				
		}
		
		.earea{
			width:628px;
			height:70px;
			float:left;
			margin-left:38px;
				
		}
		textarea{
				width:628px;
				height:70px;
				resize:none;
				margin-bottom:20px;
				float:left;
			}
			
		#farea{
			width:200px;
			height:30px;
			margin:0px auto;
			
		}
		input[type=submit]{
				width:200px;
				height:50px;
				
				background:grey;
				color:black;
				border:double 2px grey;
				border-radius:10px;
				opacity:0.8;
			}
			
		input[type=submit]:hover{
				opacity:1;
				transform:scale(1.1,1.1);
				font:bold;

			}
		</style>
</head>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="images/logo.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Good Morning, <span class="text-black fw-bold">Aman Kumar Sah</span></h1>
            <h3 class="welcome-sub-text">Your performance summary this week </h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="icon-mail icon-lg"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-alert m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                  <p class="fw-light small-text mb-0"> Just now </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-settings m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                  <p class="fw-light small-text mb-0"> Private message </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-airballoon m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                  <p class="fw-light small-text mb-0"> 2 days ago </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown"> 
            <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-bell"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
            </div>
          </li>
          <?php
				include_once('dropdown.php');
			?>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      	<?php
			include_once('leftnav.php');
		?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="false">Audiences</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Demographics</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">More</a>
                    </li>
                  </ul>
                  <div>
                    <div class="btn-wrapper">
                      <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                      <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                      <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                    </div>
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
          <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            <p class="statistics-title">Bounce Rate</p>
                            <h3 class="rate-percentage">32.53%</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">Page Views</p>
                            <h3 class="rate-percentage">7,682</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">New Sessions</p>
                            <h3 class="rate-percentage">68.8</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Avg. Time on Site</p>
                            <h3 class="rate-percentage">2m:35s</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">New Sessions</p>
                            <h3 class="rate-percentage">68.8</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Avg. Time on Site</p>
                            <h3 class="rate-percentage">2m:35s</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                          </div>
                        </div>
                      </div>
                    </div> 
						<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Order Data Update Table</h4>
                 
                  <div class="table-responsive">
                    <table class="table table-hover">
					
			            	<?php
                                                    
                                                    include "module3setting.php";
                                                    $cid=$_GET['cid'];
                                                    
                                                    
                                                    
                                                    //echo $cid;
                                                    
                                                    $sql="SELECT * FROM orderinfo WHERE cid=".$cid."";
                                                    //echo $sql;
                                                    
                                                    if($data=mysqli_query($conn,$sql))
                                                    {
                                                        if(mysqli_num_rows($data)>0)
                                                        {
                                                            
                                                            $bakery=mysqli_fetch_array($data);
                                                            //echo $bakery['cname'];
                                                            

                                                        }
                                                        else{
                                                            echo"Data not available";
                                                        }
                                                    }
                                                    else{
                                                        echo"Something wrong";
                                                    }
                                                    
                                                    
                                                    
                                                
                                                    
                                        
                                                    if(!empty($_POST['cname_new']))
                                                    {
                                                        if($_POST['cname_new']!=$bakery['cname'])
                                                        {
                                                            $cname_new= $_POST['cname_new'];
                                                            
                                                            $sql="UPDATE orderinfo SET cname='".$cname_new."' WHERE cid=".$cid."";
                                                            /*if($data=mysqli_query($conn,$sql))
                                                            {
                                                                if(mysqli_num_rows($data)>0)
                                                                {
                                                            
                                                                    $bakery=mysqli_fetch_array($data);
                                                                    //echo $bakery['cname'];
                                                            

                                                                }
                                                                else{
                                                                    echo"Data not available";
                                                                }
                                                            }
                                                            else{
                                                                echo"Something wrong";
                                                            }*/
                                                            
                                                            if($conn->query($sql)===TRUE)
                                                            {
                                                               // echo "customer name successfully updated";
                                        
                                                                $sql="SELECT * FROM orderinfo WHERE cid=".$cid."";
                                                                   //echo $sql;
                                                    
                                                              if($data=mysqli_query($conn,$sql))
                                                              {
                                                                  if(mysqli_num_rows($data)>0)
                                                                  {
                                                                      
                                                                      $bakery=mysqli_fetch_array($data);
                                                                      //echo $bakery['cname'];
                                                                      

                                                                  }
                                                                  else{
                                                                      echo"Data not available";
                                                                  }
                                                              }
                                                              else{
                                                                  echo"Something wrong";
                                                              }
                                                              
                                                            }
                                                            else
                                                            {
                                                                echo "something error";
                                                            }
                                                            //echo "Name successfully updated..";
                                                        }
                                                        
                                                    }
                                                    if(!empty($_POST))
                                                    {
                                                        if($bakery['mobile']!=$_POST['mobile_new'])
                                                        {
                                                          $mobile_new = $_POST['mobile_new'];
                                                          $update="UPDATE orderinfo SET mobile=".$mobile_new." WHERE cid=".$cid."";

                                                          if($conn->query($update)===TRUE)
                                                          {
                                                            //echo "Customer mobile no. successfully registered";

                                                            $sql="SELECT * FROM orderinfo WHERE cid=".$cid."";
                                                            //echo $sql;
                                                            
                                                            if($data=mysqli_query($conn,$sql))
                                                            {
                                                                if(mysqli_num_rows($data)>0)
                                                                {
                                                                    
                                                                    $bakery=mysqli_fetch_array($data);
                                                                    //echo $bakery['cname'];
                                                                    
        
                                                                }
                                                                else{
                                                                    echo"Data not available";
                                                                }
                                                            }
                                                            else{
                                                                echo"Something wrong";
                                                            }
                                                          }
                                                        } 

                                                        if($bakery['DOD']!=$_POST['DOD_new'])
                                                        {
                                                          $DOD_new = $_POST['DOD_new'];
                                                          $update="UPDATE orderinfo SET DOD='".$DOD_new."' WHERE cid=".$cid."";

                                                          if($conn->query($update)===TRUE)
                                                          {
                                                            //echo "Customer date of order successfully registered";

                                                            $sql="SELECT * FROM orderinfo WHERE cid=".$cid."";
                                                            //echo $sql;
                                                            
                                                            if($data=mysqli_query($conn,$sql))
                                                            {
                                                                if(mysqli_num_rows($data)>0)
                                                                {
                                                                    
                                                                    $bakery=mysqli_fetch_array($data);
                                                                    //echo $bakery['cname'];
                                                                    
        
                                                                }
                                                                else{
                                                                    echo"Data not available";
                                                                }
                                                            }
                                                            else{
                                                                echo"Something wrong";
                                                            }
                                                          }
                                                        } 

                                                        if($bakery['email']!=$_POST['email_new'])
                                                        {
                                                          $email_new = $_POST['email_new'];
                                                          $update="UPDATE orderinfo SET email='".$email_new."' WHERE cid=".$cid."";
                                                           // echo $update;
                                                          if($conn->query($update)===TRUE)
                                                          {
                                                            //echo "Customer email successfully registered";

                                                            $sql="SELECT * FROM orderinfo WHERE cid=".$cid."";
                                                            //echo $sql;
                                                            
                                                            if($data=mysqli_query($conn,$sql))
                                                            {
                                                                if(mysqli_num_rows($data)>0)
                                                                {
                                                                    
                                                                    $bakery=mysqli_fetch_array($data);
                                                                    //echo $bakery['cname'];
                                                                    
        
                                                                }
                                                                else{
                                                                    echo"Data not available";
                                                                }
                                                            }
                                                            else{
                                                                echo"Something wrong";
                                                            }
                                                          }
                                                        } 

                                                        if($bakery['daddress']!=$_POST['daddress_new'])
                                                        {
                                                          $daddress_new = $_POST['daddress_new'];
                                                          $update="UPDATE orderinfo SET daddress='".$daddress_new."' WHERE cid=".$cid."";
                                                           // echo $update;
                                                          if($conn->query($update)===TRUE)
                                                          {
                                                            //echo "Customer delivery address successfully registered";

                                                            $sql="SELECT * FROM orderinfo WHERE cid=".$cid."";
                                                            //echo $sql;
                                                            
                                                            if($data=mysqli_query($conn,$sql))
                                                            {
                                                                if(mysqli_num_rows($data)>0)
                                                                {
                                                                    
                                                                    $bakery=mysqli_fetch_array($data);
                                                                    //echo $bakery['cname'];
                                                                    
        
                                                                }
                                                                else{
                                                                    echo"Data not available";
                                                                }
                                                            }
                                                            else{
                                                                echo"Something wrong";
                                                            }
                                                          }
                                                        } 

                                                        if($bakery['pin']!=$_POST['pin_new'])
                                                        {
                                                          $pin_new = $_POST['pin_new'];
                                                          $update="UPDATE orderinfo SET pin='".$pin_new."' WHERE cid=".$cid."";
                                                           // echo $update;
                                                          if($conn->query($update)===TRUE)
                                                          {
                                                            //echo "Customer pin  successfully registered";

                                                            $sql="SELECT * FROM orderinfo WHERE cid=".$cid."";
                                                            //echo $sql;
                                                            
                                                            if($data=mysqli_query($conn,$sql))
                                                            {
                                                                if(mysqli_num_rows($data)>0)
                                                                {
                                                                    
                                                                    $bakery=mysqli_fetch_array($data);
                                                                    //echo $bakery['cname'];
                                                                    
        
                                                                }
                                                                else{
                                                                    echo"Data not available";
                                                                }
                                                            }
                                                            else{
                                                                echo"Something wrong";
                                                            }
                                                          }
                                                        } 

                                                        if($bakery['hour']!=$_POST['hour_new'])
                                                        {
                                                          $hour_new = $_POST['hour_new'];
                                                          $update="UPDATE orderinfo SET hour='".$hour_new."' WHERE cid=".$cid."";
                                                           // echo $update;
                                                          if($conn->query($update)===TRUE)
                                                          {
                                                            //echo "Customer hour  successfully registered";

                                                            $sql="SELECT * FROM orderinfo WHERE cid=".$cid."";
                                                            //echo $sql;
                                                            
                                                            if($data=mysqli_query($conn,$sql))
                                                            {
                                                                if(mysqli_num_rows($data)>0)
                                                                {
                                                                    
                                                                    $bakery=mysqli_fetch_array($data);
                                                                    //echo $bakery['cname'];
                                                                    
        
                                                                }
                                                                else{
                                                                    echo"Data not available";
                                                                }
                                                            }
                                                            else{
                                                                echo"Something wrong";
                                                            }
                                                          }
                                                        } 

                                                        if($bakery['min']!=$_POST['min_new'])
                                                        {
                                                          $min_new = $_POST['min_new'];
                                                          $update="UPDATE orderinfo SET min='".$min_new."' WHERE cid=".$cid."";
                                                           // echo $update;
                                                          if($conn->query($update)===TRUE)
                                                          {
                                                            //echo "Customer min successfully registered";

                                                            $sql="SELECT * FROM orderinfo WHERE cid=".$cid."";
                                                            //echo $sql;
                                                            
                                                            if($data=mysqli_query($conn,$sql))
                                                            {
                                                                if(mysqli_num_rows($data)>0)
                                                                {
                                                                    
                                                                    $bakery=mysqli_fetch_array($data);
                                                                    //echo $bakery['cname'];
                                                                    
        
                                                                }
                                                                else{
                                                                    echo"Data not available";
                                                                }
                                                            }
                                                            else{
                                                                echo"Something wrong";
                                                            }
                                                          }
                                                        }
                                                        
                                                        if($bakery['ap']!=$_POST['ap_new'])
                                                        {
                                                          $ap_new = $_POST['ap_new'];
                                                          $update="UPDATE orderinfo SET ap='".$ap_new."' WHERE cid=".$cid."";
                                                           // echo $update;
                                                          if($conn->query($update)===TRUE)
                                                          {
                                                           //echo "Customer am/pm successfully registered";

                                                            //$sql="SELECT * FROM orderinfo WHERE cid=".$cid."";
                                                            //echo $sql;
                                                            
                                                            if($data=mysqli_query($conn,$sql))
                                                            {
                                                                if(mysqli_num_rows($data)>0)
                                                                {
                                                                    
                                                                    $bakery=mysqli_fetch_array($data);
                                                                    //echo $bakery['cname'];
                                                                    
        
                                                                }
                                                                else{
                                                                    echo"Data not available";
                                                                }
                                                            }
                                                            else{
                                                                echo"Something wrong";
                                                            }
                                                          }
                                                        }
                                                        
                                                        if($bakery['bakery']!=$_POST['bakery_new'])
                                                        {
                                                          $bakery_new = $_POST['bakery_new'];
                                                          $update="UPDATE orderinfo SET bakery='".$bakery_new."' WHERE cid=".$cid."";
                                                           // echo $update;
                                                          if($conn->query($update)===TRUE)
                                                          {
                                                            //echo "Customer bakery product successfully registered";

                                                            $sql="SELECT * FROM orderinfo WHERE cid=".$cid."";
                                                            //echo $sql;
                                                            
                                                            if($data=mysqli_query($conn,$sql))
                                                            {
                                                                if(mysqli_num_rows($data)>0)
                                                                {
                                                                    
                                                                    $bakery=mysqli_fetch_array($data);
                                                                    //echo $bakery['cname'];
                                                                    
        
                                                                }
                                                                else{
                                                                    echo"Data not available";
                                                                }
                                                            }
                                                            else{
                                                                echo"Something wrong";
                                                            }
                                                          }
                                                        }

                                                         
                                                        if($bakery['paymentmethod']!=$_POST['paymentmethod_new'])
                                                        {
                                                          $paymentmethod_new = $_POST['paymentmethod_new'];
                                                          $update="UPDATE orderinfo SET paymentmethod='".$paymentmethod_new."' WHERE cid=".$cid."";
                                                           // echo $update;
                                                          if($conn->query($update)===TRUE)
                                                          {
                                                           // echo "Customer payment method successfully registered";

                                                            $sql="SELECT * FROM orderinfo WHERE cid=".$cid."";
                                                            //echo $sql;
                                                            
                                                            if($data=mysqli_query($conn,$sql))
                                                            {
                                                                if(mysqli_num_rows($data)>0)
                                                                {
                                                                    
                                                                    $bakery=mysqli_fetch_array($data);
                                                                    //echo $bakery['cname'];
                                                                    
        
                                                                }
                                                                else{
                                                                    echo"Data not available";
                                                                }
                                                            }
                                                            else{
                                                                echo"Something wrong";
                                                            }
                                                          }
                                                        }
                                                    }

                                                  
                                                    
                                        echo "<div id='mainarea'>
                                    
                                        <form  method='POST' action='".$_SERVER['PHP_SELF']."?cid=$cid'>
                                            <br><br><div class='aarea'><b>Type of Order</b></div>
                                            <div class='barea'>
                                                <input type='radio' name='ordertype' value='delivery' checked/>
                                                <label>Delivery</label><br>
                                            
                                                <input type='radio' name='ordertype' value='pickup'/>						<label>Pickup</label>
                                            </div>
                                            
                                            <div class='aarea'><b>Pickup/Delivery Date</b></div>
                                            <div class='barea'>
                                                <input type='date' name='DOD_new' value='".$bakery['DOD']."' placeholder='DD-MM-YYYY' class='carea'/>
                                            </div>
                                            
                                            <div class='aarea'><b>Pickup/Delivery Time</b></div>
                                            <div class='barea'>
                                                <select name='hour_new' >
                                        
                                                    <option value='".$bakery['hour']."'>".$bakery['hour']."</option>
                                                    <option value='1'>1</option>
                                                    <option value='2'>2</option>
                                                    <option value='3'>3</option>
                                                    <option value='4'>4</option>
                                                    <option value='5'>5</option>
                                                    <option value='6'>6</option>
                                                    <option value='7'>7</option>
                                                    <option value='8'>8</option>
                                                    <option value='9'>9</option>
                                                    <option value='10'>10</option>
                                                    <option value='11'>11</option>
                                                    <option value='12'>12</option>
                                            
                                                </select>
                                                <select name='min_new' >
                                                    
                                                    <option value='".$bakery['min']."'>".$bakery['min']."</option>
                                                    <option value='00'>00</option>
                                                    <option value='10'>10</option>
                                                    <option value='20'>20</option>
                                                    <option value='30'>30</option>
                                                    <option value='40'>40</option>
                                                    <option value='50'>50</option>
                                                            
                                                </select>
                                                <select name='ap_new'-->
                                        
                                                    <option value='".$bakery['ap']."'>".$bakery['ap']."</option>
                                                    <option value='am'>AM</option>
                                                    <option value='pm'>PM</option>
                                                    
                                                </select>
                                                
                                            </div>
                                            
                                            <div class='aarea' ><b>Customer's Name</b></div>
                                            <div class='barea'>
                                                <input type='text'  name='cname_new' value='".$bakery['cname']."' placeholder='Enter your name' class='carea'/>
                                            </div>
                                            
                                            <div class='aarea' ><b>Customer's Email</b></div>
                                            <div class='barea'>
                                                <input type='email'  name='email_new' value='".$bakery['email']."' placeholder='Enter your email id' class='carea'/>
                                            </div>
                                            
                                            <div class='aarea' ><b>Customer's Mobile No.</b></div>
                                            <div class='barea'>
                                                <input type='number'  name='mobile_new' value='".$bakery['mobile']."' placeholder='Enter your mobile no.' class='carea'/>
                                            </div>
                                            
                                            <div class='aarea' ><b>Delivery Address</b></div>
                                            <div class='barea'>
                                                <input type='text'  name='daddress_new' value='".$bakery['daddress']."' placeholder='Enter destination address' class='carea'/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type='number'  name='pin_new' value='".$bakery['pin']."' placeholder='Enter your pin no.' class='carea'/>
                                            </div>
                                            
                                            <div class='aarea'><b>Bakery Products</b></div>
                                            <div class='barea'>
                                                <select name='bakery_new' class='carea'>
                                        
                                                    <option value='".$bakery['bakery']."'>".$bakery['bakery']."</option>
                                                    <option value='cupcake'>Cupcake</option>
                                                    <option value='cookies'>Cookies</option>
                                                    <option value='doughnuts'>Doughnuts</option>
                                                    <option value='roll'>Roll</option>
                                                    <option value='butterscotchcake'>Butterscotch Cake</option>
                                                    <option value='Blackforestcake'>Blackforest Cake</option>
                                                    <option value='Whiteforestcake'>Whiteforest Cake</option>
                                                    
                                            
                                                </select>
                                            </div>
                                            
                                            <div class='aarea'><b>Method of Payment</b></div>
                                            <div class='barea'>
                                                <select name='paymentmethod_new' class='carea'>
                                        
                                                    <option value='".$bakery['paymentmethod']."'>".$bakery['paymentmethod']."</option>
                                                    <option value='credit'>Credit Card</option>
                                                    <option value='cod'>Cash on Delivery</option>
                                                    <option value='gpay'>Google Pay</option>
                                                    <option value='ppay'>Phone Pay</option>
                                                    <option value='paytm'>Paytm</option>
                                                    
                                                </select>
                                            </div>
                                            
                                            <div class='darea'><b>Would you like to write a message? If, yes enter the message below.</b></div>
                                            <div>
                                                <textarea name='msg_new' value='".$bakery['msg']."' class='earea'>
                                                </textarea>
                                            </div>
                                            
                                            <div class='darea'><b>Do you have any additional information or instructions?</b></div>
                                            <div>
                                                <textarea name='mmsg_new' value='".$bakery['mmsg']."' class='earea'>
                                                </textarea>
                                            </div>
                                            <div id='farea'>
                                                <input type='submit' value='Update'/>
                                            </div>
                                            
                                        </form>
                                    </div>";
                                            
			                ?>
                    </table>
					
                  </div>
                </div>
              </div>
            </div>
					  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

