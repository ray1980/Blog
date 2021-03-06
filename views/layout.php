<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link href="<?php Flight::link('/public/main.css') ?>" rel="stylesheet">
    <link href="<?php Flight::link('/public/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php Flight::link('/public/editor/summernote.css') ?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php Flight::link('/public/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php Flight::link('/public/editor/summernote.min.js') ?>"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" />
    <script src="<?php Flight::link('/public/moment/moment.js'); ?>"></script>
  </head>
  <body>
  <script>
    $(document).ready(function(){
        $("time").each(function(){
            $(this).text(moment($(this).attr('datetime')).from());
        });
    });
  </script>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="<?php Flight::link('/') ?>">Blog</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <?php if(Flight::has('currentUser')): ?>
      <ul class="nav navbar-nav">
			     <li><a href="<?php Flight::link('/create') ?>">New Post</a></li>
			     <li><a href="<?php Flight::link('/profile') ?>">Profile</a></li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
			<p class="navbar-text">Signed in as <?php echo Flight::get('currentUser')->fullName(); ?></p>
			<li><a href="<?php Flight::link('/logout') ?>">Logout</a></li>
		  </ul>
      <?php else: ?>
        <ul class="nav navbar-nav"></ul>
        <ul class="nav navbar-nav navbar-right">
  			     <li><a href="<?php Flight::link('/login') ?>">Login</a></li>
        </ul>
      <?php endif; ?>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

    <div class="container">
      <?php echo $body_content; ?>
    </div>

  </body>
</html>
