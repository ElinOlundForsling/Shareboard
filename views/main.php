<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shareboard</title>
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Shareboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
        </li>
      </ul>
      <ul class="navbar-nav">
      <?php if(isset($_SESSION['is_logged_in'])) : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Logout</a>
        </li>
        <?php else : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<main class="container">
  <?php Messages::display(); ?>
    <?php require($view); ?>

</main>
<script src="<?php echo ROOT_PATH; ?>assets/js/bootstrap.js"></script>
</body>
</html>