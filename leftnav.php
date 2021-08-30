<?php
	echo"<nav class='sidebar sidebar-offcanvas' id='sidebar'>
        <ul class='nav'>
          <li class='nav-item'>
            <a class='nav-link' href='index1.php'>
              <i class='mdi mdi-grid-large menu-icon'></i>
              <span class='menu-title'>Dashboard</span>
			  
            </a>
          </li>
		  <li class='nav-item'>
            <a class='nav-link' href='bakeryorder.php'>
              <i class='mdi mdi-grid-large menu-icon'></i>
              <span class='menu-title'>Orders</span>
			  
            </a>
          </li>
		  <li class='nav-item'>
            <a class='nav-link' href='bakerycontact.php'>
              <i class='mdi mdi-grid-large menu-icon'></i>
              <span class='menu-title'>Enquiry</span>
			  
            </a>
          </li>
		  <li class='nav-item'>
            <a class='nav-link' href='registrationview.php'>
              <i class='mdi mdi-grid-large menu-icon'></i>
              <span class='menu-title'>Registration</span>
			  
            </a>
          </li>

         
          <li class='nav-item nav-category'>pages</li>
          <li class='nav-item'>
            <a class='nav-link' data-bs-toggle='collapse' href='#auth' aria-expanded='false' aria-controls='auth'>
              <i class='menu-icon mdi mdi-account-circle-outline'></i>
              <span class='menu-title'>User Pages</span>
              <i class='menu-arrow'></i>
            </a>
            <div class='collapse' id='auth'>
              <ul class='nav flex-column sub-menu'>
                <li class='nav-item'> <a class='nav-link' href='logout.php'> Logout </a></li>
              </ul>
            </div>
          </li>
         
        </ul>
      </nav>";
?>