<div class="row">
  <div class="blog-main">
      <div class="blog-post">
        <h1 class="blog-post-title"><?php echo $post->title; ?></h1>
        <p class="blog-post-meta"><?php echo $post->posted; ?> by <a href="<?php Flight::link('/author/'.$post->user->id); ?>"><?php echo $post->user->fullName(); ?></a></p>
        <?php echo $post->content; ?>
      </div>
  </div>
</div>
