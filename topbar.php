
<?php 
include 'db_connect.php';

?>
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      
      
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <img class="logo" src="./assets/img/logo.jpg" width="60px"  style="padding-right: 10px;">
      <h1 class="logo mr-auto"><a href="index.php"><?php echo isset($meta['blog_name']) ? $meta['blog_name'] : '' ?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="nav-home"><a href="index.php?page=home">Inicio</a></li>
          <li class="drop-down"><a href="javascript:void(0)">Categorías</a>
            <ul>
              <?php
              $qry = $conn->query("SELECT * from category where status = 1"); 
            while($row=$qry->fetch_assoc()){
               ?>
                <li><a href="index.php?page=category&id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a></li>
              <?php } ?>
            </ul>
          </li>
          <li class="nav-about"><a href="index.php?page=about">Univesidad
            <img src="./assets/img/libro.png"></a></li>

          <li > <a href="./admin/login.php"> Iniciar Sesión<img src="./assets/img/hombre.png"></a></li>

        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header><!-- End Header -->
  <script>
  	$('.nav-<?php echo !isset($_GET['page']) ? 'home': $_GET['page'] ?>').addClass('active');
  </script>