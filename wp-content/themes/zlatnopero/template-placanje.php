<?php get_header(); /* Template name: Plaćanje */ ?>

<div id="placanje" class="container">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
  endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
  <?php endif; ?>

</div>

<?php get_footer(); ?>
