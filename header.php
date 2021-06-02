<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mainNav">
	<ul class="navbar-nav d-none d-lg-flex ml-2 order-3">
        <li class="nav-item"><a class="nav-link" href="https://themes.getbootstrap.com/signin/"><?php if(isset($_SESSION['id'])) { echo $_SESSION['fname']; } ?> &nbsp;&nbsp;|&nbsp;</a></li>
		<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>    
	</ul>
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="home.php">Placement Portal</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="admin-announcement.php">Announcement</a>
          </li>
		  <?php
		  if(!($_SESSION['fname'] == "admin") ){ ?>
		  <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="student_register.php">Student Details</a>
          </li>
		  <?php } ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>  