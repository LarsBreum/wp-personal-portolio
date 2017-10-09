<?php get_header(); ?>
<div class="container content-wrap row">
  <main class="col col-md-10 row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="post col-md-6">
      <h1><?php the_title(); ?></h1>
      <div class="card">
        <p><?php the_excerpt(); ?></p>
      </div>
  </div>
    <?php endwhile; else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  </main>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>