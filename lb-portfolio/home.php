<?php get_header(); ?>
<div class="container content-wrap row">
  <main class="col col-md-10 row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="post col-md-6">
      <div class="card">
        <a href="<?php get_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
        <div class="post-img">
          <?php the_post_thumbnail(); ?>
        </div>
        <span class="byline">By: <?php the_author(); ?>, On: <?php the_date(); ?>, In: <?php the_category(); ?>
          <p><?php the_excerpt(); ?><a href="<?php get_permalink(); ?>">Read more...</a></p>
      </div>
  </div>
    <?php endwhile; else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  </main>
<?php get_sidebar(); ?>
</div>
<h1>Home</h1>
<?php get_footer(); ?>