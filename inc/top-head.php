<div class="top-head">
	<nav class="navbar navbar-expand-md mynavcolor">
  <!-- Brand -->
  <a class="electicbrand" href="dashboard.php"><img src="../assets/img/fevicon.png" alt="">Electric Meter Reading Software</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link dashb" href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="electronic.php"><i class="fa fa-plug"></i> Data Entry</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="electronic-data.php"><i class="fa fa-pie-chart"></i> Electic Report</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="setting.php"><i class="fa fa-cog"></i> Setting</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=""><i class="fa fa-user"></i> <?php echo $_SESSION['name']?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link logto" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
      </li>
    </ul>
  </div>
</nav>
</div>