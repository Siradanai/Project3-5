<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <img src="{{asset('admin/img/logo/lll.png')}}">
        </div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
      Tables
      </div>
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Bootstrap UI</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bootstrap UI</h6>
            <a class="collapse-item" href="alerts.php">Alerts</a>
            <a class="collapse-item" href="buttons.php">Buttons</a>
            <a class="collapse-item" href="dropdowns.php">Dropdowns</a>
            <a class="collapse-item" href="modals.php">Modals</a>
            <a class="collapse-item" href="popovers.php">Popovers</a>
            <a class="collapse-item" href="progress-bar.php">Progress Bars</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tables</h6>
            <a class="collapse-item" href="tables_product.php">Product Tables</a>
            <a class="collapse-item" href="tables_type.php">Producttype Tables</a>
            <a class="collapse-item" href="tables_backgroud.php">Backgroud Tables</a>
            <a class="collapse-item" href="tables_contents.php">Contents Tables</a>
            <a class="collapse-item" href="tables_contents1.php">Special content Tables</a>
        </div>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('product')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Product Tables</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/TypesForm')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Types Tables</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('backgroud')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Backgroud Tables</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('contents')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Contents Tables</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('specialcontents')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Special content Tables</span>
        </a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="login.php">
          <i class="fas fa-fw fa-columns"></i>
          <span>Login</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">
          <i class="fas fa-fw fa-columns"></i>
          <span>Register</span>
        </a>
      </li>
      <-- <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span>
        </a>
      </li> -->
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->