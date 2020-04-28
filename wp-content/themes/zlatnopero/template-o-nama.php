<?php /* Template Name: O nama */ ?>
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

<body>
  <header class="custom o-nama">
    <?php $pocetna = home_url(); ?>
    <?php $oNama = home_url('/o-nama');?>
    <?php $proizvodi = home_url('/proizvodi');?>
    <?php $reference = home_url('/reference');?>
    <?php $galerija = home_url('/galerija');?>
    <?php $kontakt = home_url('/kontakt');?>
    <div class="container">
      <nav class=main-nav>
        <div class="logo"><img src="/wp-content/uploads/2020/04/logo-beli.svg" alt="Website main logo"></div>
        <ul class="nav-list">
          <li><a href="<?php echo $pocetna; ?>">Početna</a></li>
          <li><a href="<?php echo $oNama; ?>">O nama</a></li>
          <li><a href="<?php echo $proizvodi; ?>">Proizvodi</a></li>
          <li><a href="<?php echo $reference; ?>">Reference</a></li>
          <li><a href="<?php echo $galerija; ?>">Galerija</a></li>
          <li><a href="<?php echo $kontakt; ?>">Kontakt</a></li>
        </ul>
        <div class="nav-icons">
          <div class="search-icon"><img src="/wp-content/uploads/2020/04/search-icon-white.png" alt=""></div>
          <div class="cart-icon"><a href="/cart"><img src="/wp-content/uploads/2020/04/cart-icon-white.png" alt=""></a></div>
        </div>
        <button class="nav-burger"><i class="fas fa-bars"></i></button>
      </nav>
      <div class="search-wrapper"><?php echo get_search_form(); ?></div>
      <div class="header-content">
        <div class="header-text">
          <h5 class=page-title><?php echo get_the_title(); ?></h5>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
          endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>
        </div>
        <img src="/wp-content/uploads/2020/04/o-nama-header.png" alt="Website main header image">
      </div>
    </div>
  </header>
  <div id="stripe">
    <div class="container">
      <p>ZLATNO PERO već 20 godina brine o Vašem zdravlju, proizvodeći jorgane i jastuke vrhunskog kvaliteta marke ZLATNO PERO.</p>
    </div>
  </div>
  <div class="container">
    <div class="page-content">
      <img src="/wp-content/uploads/2020/04/o-paperju.png" alt="Website main header image">
      <div class="page-text">
        <h5 class=page-title><?php echo get_the_title(); ?></h5>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
        endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
