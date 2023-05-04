

<!-- Start NavBar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="dashboard.php">
      <?php echo lang('HOME_ADMIN') ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#app-nav" aria-controls="app-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="app-nav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="categories.php"><?php echo lang('CATEGORIES') ?></a></li>
        <li class="nav-item"><a class="nav-link" href="items.php"><?php echo lang('ITEMS') ?></a></li>
        <li class="nav-item"><a class="nav-link" href="members.php"><?php echo lang('MEMBERS') ?></a></li>
        <li class="nav-item"><a class="nav-link" href="comments.php"><?php echo lang('COMMENTS') ?></a></li>
      </ul>

        <ul class="navbar-nav ">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"
           href="#" role="button" id="navbarDropdown"
           data-bs-toggle="dropdown"
            aria-expanded="false">
            UserName
             <span class="caret"></span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../index.php">Visit Shop</a>
            <a class="dropdown-item" href="members.php?do=Edit&userId=<?php echo $_SESSION['userId'] ?>">Edit Profile</a>
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End NavBar -->

