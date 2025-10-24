<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light"><center>KLINIKA <small><i>simtere</i></small></center></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><i>Profile klinika</i></a>
        </div>
      </div>
      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li><br> -->
        <?php
            if ($_SESSION['leveluser']=='Admin') {
              echo "<ul class='nav navbar-nav side-nav'>";
              if ($_GET['modul']=='doutor') { echo "<li class='active'><h5><a href='doutor.html'><i class='fas fa-users snav-icon'></i>  Doutores</a></h5></li>"; }
              else { echo "<li><h5><a href='doutor.html'><i class='fas fa-users snav-icon'></i>  Doutores</a></h5></li>"; }
              if ($_GET['modul']=='user') { echo "<li class='active'><h5><a href='user.html'><i class='fas fa-users snav-icon'></i>  Users</a></h5></li>"; }
              else { echo "<li><h5><a href='user.html'><i class='fas fa-users snav-icon'></i>  Users</a></h5></li>"; }
              if ($_GET['modul']=='funsionarios') { echo "<li class='active'><a href='staff.html'><i class='fas fa-users snav-icon'></i>  Recepsionistas</a></li>"; }
              else { echo "<li><h5><a href='staff.html'><i class='fas fa-users snav-icon'></i>  Recepsionistas</a></h5></li>"; }
              if ($_GET['modul']=='pasientes') { echo "<li class='active'><a href='pasiente.html'><i class='fas fa-users snav-icon'></i>  Pasientes</a></li>"; }
              else { echo "<li><h5><a href='pasiente.html'><i class='fas fa-users snav-icon'></i>  Pasientes</a></h5></li>"; }
              if ($_GET['modul']=='inscrisaun') { echo "<li class='active'><a href='konsulta.html'><i class='fas fa-users snav-icon'></i>  Inscrição</a></li>"; }
              else { echo "<li><h5><a href='konsulta.html'><i class='fas fa-users snav-icon'></i> Inscrição</a></h5></li>"; }
              echo "<li class='divider'></li>
              </ul>";
            }
            elseif ($_SESSION['leveluser']=='Doutor') { 
              echo "<ul class='nav navbar-nav side-nav'>";
              if ($_GET['modul']=='pasientes') { echo "<li class='active'><h5><a href='tratamento.html'><i class='fas fa-users snav-icon'></i>  Pasientes Atual</a></h5></li>"; }
              else { echo "<li><h5><a href='tratamento.html'><h5><i class='fas fa-users snav-icon'></i>  Pasientes Atual</a></h5></li>"; }
                if ($_GET['modul']=='pasientes') { echo "<li class='active'><h5><a href='pasientes.html'><i class='fas fa-users snav-icon'></i>  Pasientes</a></h5></li>"; }
              else { echo "<li><h5><a href='pasientes.html'><i class='fas fa-users snav-icon'></i>  Pasientes</a></h5></li>"; }
                if ($_GET['modul']=='pasientes') { echo "<li class='active'><h5><a href='koko.html'><i class='fas fa-users snav-icon'></i>  Tratamentos</a></h5></li>"; }
              else { echo "<li><a href='koko.html'><h5><i class='fas fa-users snav-icon'></i>  Tratamentos</a></h5></li>"; }
              echo "<li class='divider'></li>
              </ul>";
            }
            else {
              echo "<ul class='nav navbar-nav side-nav'>";
              if ($_GET['modul']=='fpe') { echo "<li class='active'><h5><a href='formulario.html'><i class='fas fa-users snav-icon'></i>  Formulario</a></h5></li>"; }
              else { echo "<li><h5><a href='formulario.html'><i class='fas fa-users snav-icon'></i> Formulario</a></h5></li>"; }
              if ($_GET['modul']=='materia') { echo "<li class='active'><h5><a href='pasiente.html'><i class='fas fa-users snav-icon'></i>  Pacientes</a></h5></li>"; }
              else { echo "<li><h5><a href='pasiente.html'><i class='fas fa-users snav-icon'></i> Pacientes</a></h5></li>"; }
                if ($_GET['modul']=='trabalho') { echo "<li class='active'><h5><a href='konsulta.html'><i class='fas fa-users snav-icon'></i>  Inscrição</a></h5></li>"; }
              else { echo "<li><a href='konsulta.html'><h5><i class='fas fa-users snav-icon'></i>  Inscrição</a></h5></li>"; }
              echo "<li class='divider'></li>
              </ul>";
            }	
          ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
