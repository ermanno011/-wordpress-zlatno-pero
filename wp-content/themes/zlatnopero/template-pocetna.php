<?php /* Template name: Početna */ ?>
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

<body class="homepage">
  <header class="custom">
    <div class="container">
      <nav class=main-nav>
        <div class="logo"><img src="/wp-content/uploads/2020/04/logo-beli.svg" alt="Website main logo"></div>
        <ul class="nav-list">
          <?php $pocetna = home_url(); ?>
          <?php $oNama = home_url('/o-nama');?>
          <?php $proizvodi = home_url('/proizvodi');?>
          <?php $kontakt = home_url('/kontakt');?>
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
      <div class="header-content custom">
        <h5 class="top-text">100% prirodni proizvodi</h5>
        <h1 class="main-text">Više od 30 godina</br>iskustva</h1>
        <a  class="view-more" href="<?php echo $oNama; ?>">Saznajte više</a>
        <!-- <img src="/wp-content/uploads/2020/04/header-image.png" alt="Website main header image"> -->
      </div>
      <div class="header-posts">
        <div class="header-post-wrapper">
          <div class="post-image">
            <img src="/wp-content/uploads/2020/04/first-header-post.png" alt="First header post image">
          </div>
          <div class="post-content">
            <h4>Vrhunski kvalitet</h4>
            <p>Čovek trećinu života provede koristeći udobonost svog kreveta, pa je kvalitet jastuka i jorgana i njihov pravilan izbor od presudnog značaja za razvoj, zdravlje i vitalnost dece i odraslih.</p>
            <!-- <a href="/vrhunski-kvalitet/">Pročitajte još</a> -->
          </div>
        </div>
        <div class="header-post-wrapper">
          <div class="post-image">
            <img src="/wp-content/uploads/2020/04/second-header-post.png" alt="Second header post image">
          </div>
          <div class="post-content">
            <h4>Naše paperje</h4>
            <p>Danas je nedvosmisleno jasno da je perje i tehnološki i medicinski najkvalitetniji materijal za punjenje. Ne služi grinjama kao stanište, 100% je prirodno i ima veliku termo-izolacijsku sposobnost.</p>
            <!-- <a href="/nase-paperje/">Pročitajte još</a> -->
          </div>
        </div>
      </div>
    </div>
  </header>
  <nav class="mob-nav white">.
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
  <main class="container">
    <aside class="main-sidebar home-sidebar">
      <div class="sidebar-wrapper">
        <!-- <h4>Odaberite svoju kategoriju</h4> -->
        <div class="sidebar-part">
          <a class="aside-jastuk" href="/product-category/jastuk/"><img src="/wp-content/uploads/2020/04/WhatsApp-Image-2020-04-04-at-15.01.31.jpeg" alt="Jatuk"><span>Jastuci</span><div class="mask"></div></a>
          <a class="aside-jorgan" href="/product-category/jorgan/"><img src="/wp-content/uploads/2020/04/WhatsApp-Image-2020-04-04-at-15.01.31.jpeg" alt="Jorgan"><span>Jorgani</span><div class="mask"></div></a>
        </div>
        <div class="sidebar-part">
          <a class="aside-standard" href="/product-tag/standard/"><img src="/wp-content/uploads/2020/04/WhatsApp-Image-2020-04-04-at-15.01.31.jpeg" alt="Jatuk"><span>Standard proizvodi</span><div class="mask"></div></a>
          <a class="aside-premium" href="/product-tag/premium/"><img src="/wp-content/uploads/2020/04/WhatsApp-Image-2020-04-04-at-15.01.31.jpeg" alt="Jatuk"><span>Premium proizvodi</span><div class="mask"></div></a>
        </div>
      </div>
    </aside>
    <section class="main-section">
      <?php echo get_post_field('post_content', $post->ID); ?>
      <ul class="najprodavaniji products">
        <h3>Najprodavaniji proizvodi</h3>
    	<?php
    		$args = array(
    			'post_type' => 'product',
    			'posts_per_page' => 3,
          'product_tag' => 'najprodavaniji',
    			);
    		$loop = new WP_Query( $args );
    		if ( $loop->have_posts() ) {
    			while ( $loop->have_posts() ) : $loop->the_post();
    				wc_get_template_part( 'topsell', 'product' );
    			endwhile;
    		} else {
    			echo __( 'No products found' );
    		}
    		wp_reset_postdata();
    	?>
    </ul>
    <ul class="products">
      <h3>Proizvodi na popustu</h3>
    <?php
      $args = array(
        'post_type' => 'product',
        'posts_per_page' => 3,
        'meta_query'     => array(
          'relation' => 'OR',
          array( // Simple products type
              'key'           => '_sale_price',
              'value'         => 0,
              'compare'       => '>',
              'type'          => 'numeric'
          ),
          array( // Variable products type
              'key'           => '_min_variation_sale_price',
              'value'         => 0,
              'compare'       => '>',
              'type'          => 'numeric'
              )
          )
      );
      $loop = new WP_Query( $args );
      if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
          wc_get_template_part( 'onsale', 'product' );
        endwhile;
      } else {
        echo __( 'No products found' );
      }
      wp_reset_postdata();
    ?>
  </ul>
    </section>
  </main>
<?php get_footer(); ?>
