 <?php
 $nome_doutor=$user->viewDoutorHome('naran_doutor',$username);

 echo"
 <nav class='main-header navbar navbar-expand navbar-white navbar-light'>
    <!-- Left navbar links -->
    <ul class='navbar-nav'>
      <li class='nav-item'>
        <a class='nav-link' data-widget='pushmenu' href='#' role='button'><i class='fas fa-bars'></i></a>
      </li>
      <li class='nav-item d-none d-sm-inline-block'>
        <a href='home.html' class='nav-link'>Home</a>
      </li>
      <li class='nav-item d-none d-sm-inline-block'>
        <a href='#' class='nav-link'>Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class='navbar-nav ml-auto'>

      <!-- Messages Dropdown Menu -->
      <li class='dropdown user-dropdown'>
        <a href='#' class='dropdown-toggle' data-toggle='dropdown' style='color: gray'><i class='fa fa-user'></i>$nome_doutor<b class='caret'></b></a>
            <ul class='dropdown-menu'>
                <li class='divider'></li>
                <li><a href='login.html' style='color: gray'><i class='fa fa-power-off'></i>Log Out</a></li>
            </ul>
        </li>
      <!-- Notifications Dropdown Menu -->
<!--       
      <li class='nav-item'>
        <a class='nav-link' data-widget='fullscreen' href='#' role='button'>
          <i class='fas fa-expand-arrows-alt'></i>
        </a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' data-widget='control-sidebar' data-controlsidebar-slide='true' href='#' role='button'>
          <i class='fas fa-th-large'></i>
        </a>
      </li> -->
    </ul>
  </nav>";

  ?>