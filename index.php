<body>
  <?php include 'header.php'; ?>

  <div class="container">
    <?php include 'menu.php'; ?>

    <div class="content">
      <?php
        if (isset($_GET['page']) && file_exists($_GET['page'] . '.php')) {
            include $_GET['page'] . '.php';
        } else {
            echo "<h2>Selamat Datang di Website Ervindo</h2>";
        }
      ?>
    </div>
  </div>

  <?php include 'footer.php'; ?>
</body>
