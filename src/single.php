<?php get_header(); ?>
<div class="container content-wrap row">
  <main class="col col-md-10">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <a href="<?php get_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
    <div class="card">
      <p><?php the_content(); ?></p>
    </div>

    <?php endwhile; else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  </main>
<?php get_sidebar(); ?>
</div>
<h1>single.php</h1>
<?php get_footer(); ?>