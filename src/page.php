<?php get_header(); ?>
<div class="container content-wrap row">
  <main class="col col-md-10">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div class="card">
      <p><?php the_content(); ?></p>
    </div>

    <?php endwhile; else : ?>
      <p><?php esc_html_e( 'Sorry, no pages found.' ); ?></p>
    <?php endif; ?>

  </main>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>