<nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index#hero" class="active">Home<br></a></li>
          <li><a href="index#about">About</a></li>
          <li><a href="index#services">Services</a></li>
          <li><a href="index#blogs">Blogs</a></li>
          <li><a href="index#team">Team</a></li>
          <li><a href="index#contact">Contact</a></li>
          <?php
            if(isset($_SESSION["validuser"])){
              echo "<li><a href='activity'>Activity</a></li>
              <li><a href='#logout' data-bs-toggle='modal'>Logout</a></li>";
            }else{
              echo "<li><a href='#login' data-bs-toggle='modal'>Login</a></li>";
            }
          ?>
          
          <!-- <li><a href="#signup" data-bs-toggle="modal">Signup</a></li> -->
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>