<?php
/*
Template Name: Custom Page
Description: A custom page layout for special content.
*/
?>

<?php get_header(); ?>

<main class="custom-page">
  <section>
    <h1><?php the_title(); ?></h1>
    <div class="page-content">
      <?php
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
              the_content();
          endwhile;
      else :
          echo '<p>No content found.</p>';
      endif;
      ?>
    </div>
  </section>
</main>


