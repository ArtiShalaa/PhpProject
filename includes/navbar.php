<style>
<?php include 'assets/css/custom.css'; ?>
</style>




<nav class="navbar navbar-expand-lg navbar-dark shadow sticky-top">
  <div class="container">
    <a class="navbar-brand d-block d-sm-none d-md-none" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

        <?php if(isset($_SESSION['auth_user'])) : ?>
        
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?= $_SESSION["auth_username"]; ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">My Profile</a></li>
              <form action="allcode.php" method="POST">
                <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
              </form>
          </li>
          </ul>
        </li>
          <?php else : ?>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <?php endif; ?>
      </ul>

    </div>
  </div>
</nav>

<div class="welcome-section">
  <div class="dark-layer"></div>
  <h1 class="welcome-text text-center text-white">Welcome to your trip advisor</h1>
</div>