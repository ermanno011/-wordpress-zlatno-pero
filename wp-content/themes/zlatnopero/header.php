<!doctype html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,600,800&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<?php wp_head(); ?>
</head>

<body class="shop">
  <header>
    <?php $pocetna = home_url(); ?>
    <?php $oNama = home_url('/o-nama');?>
    <?php $proizvodi = home_url('/proizvodi');?>
    <?php $reference = home_url('/reference');?>
    <?php $galerija = home_url('/galerija');?>
    <?php $kontakt = home_url('/kontakt');?>

    <div class="container">
      <nav class=main-nav>
        <a href="<?php echo $pocetna ?>" class="logo"><img src="/wp-content/uploads/2020/04/logo-color.svg" alt="Website main logo"></a>
        <ul class="nav-list">
          <li><a href="<?php echo $pocetna; ?>">Početna</a></li>
          <li><a href="<?php echo $oNama; ?>">O nama</a></li>
          <li><a href="<?php echo $proizvodi; ?>">Proizvodi</a></li>
          <li><a href="<?php echo $reference; ?>">Reference</a></li>
          <li><a href="<?php echo $galerija; ?>">Galerija</a></li>
          <li><a href="<?php echo $kontakt; ?>">Kontakt</a></li>
        </ul>
        <div class="nav-icons">
          <div class="search-icon"><img src="/wp-content/uploads/2020/04/search-icon.png" alt=""></div>
          <div class="cart-icon"><a href="/cart"><img src="/wp-content/uploads/2020/04/cart-icon.png" alt=""></a></div>
        </div>
        <button class="nav-burger"><i class="fas fa-bars"></i></button>
      </nav>
    </div>
    <div class="search-wrapper container"><?php echo get_search_form(); ?></div>
  </header>

  <nav class="mob-nav">.
    <div class="top-stripe">
      <button class="close-nav"><i class="fas fa-times"></i></button>
    </div>
    <ul>
      <li><a href="<?php echo $pocetna; ?>">Početna</a></li>
      <li><a href="<?php echo $oNama; ?>">O nama</a></li>
      <li><a href="<?php echo $proizvodi; ?>">Proizvodi</a></li>
      <li><a href="<?php echo $reference; ?>">Reference</a></li>
      <li><a href="<?php echo $galerija; ?>">Galerija</a></li>
      <li><a href="<?php echo $kontakt; ?>">Kontakt</a></li>
    </ul>
  </nav>

<script type="text/javascript">

</script>
