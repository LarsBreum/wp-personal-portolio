<?php get_header(); ?>
<div class="container content-wrap row">
  <main class="col col-md-10 row posts">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="post col-md-6 card">
      <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
      <div class="post-img">
        <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
      </a>
      </div>
      <span class="byline">By: <strong><?php the_author(); ?></strong>, On: <strong><?php the_date(); ?></strong>, In: <strong><?php the_category(); ?></strong>
        <p><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">Read more...</a></p>
  </div>
    <?php endwhile; else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  </main>
<?php get_sidebar(); ?>
</div>
<h1>Home.php</h1>
<?php get_footer(); ?>
