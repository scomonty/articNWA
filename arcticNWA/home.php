<?php get_header(); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 text">
                <div class="banner-title">WEBBY
                    <br />D<span class="llc">llc</span></div>
                <h2 class="pageTitle">What we've<br />been up to<br />lately</h2>
            </div>
            <div class="col-sm-6 image">
                <img class="face" src="../wp-content/themes/scottrmontgomery/images/news.png" alt="webby d llc news">
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <img class="cloud" src="../wp-content/themes/scottrmontgomery/images/clouds.png" alt="">
</div>
<div id="news">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 cent col-sm-offset-1">
                <p class="liner">extra. extra. read all about it!</p>
                <h1>Check in often for the latest news coming out of Webby D LLC</h1>
            </div>
        </div>
    </div>
</div>
<div id="blog">
                    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <?php if(have_posts()): while (have_posts()): the_post(); ?>
       <article>
       <h2><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h2>
       <p><?php echo the_time('l, F, jS, Y'); ?></p>
       <?php the_excerpt(); ?>
       <a href="<?php the_permalink(); ?>">read more</a>
     </article>
       <?php endwhile; else: ?>
       <div class="col-sm-5 cent">
      <h2>Well...<br />looks like we've been too busy building websites to add any news up to this point.</h2>
  </div>
  <div class="col-sm-7 side-right">
<img src="../wp-content/themes/scottrmontgomery/images/logo.svg">
</div>
     <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
