<!doctype html>

<html lang="en">
  <head>
    <title>Shmuel Safrin Websites<?php if(isset($page_title)) { echo '- ' . h($page_title); } ?><?php if(isset($preview) && $preview) { echo ' [PREVIEW]'; } ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/public.css'); ?>" />
  </head>

  <body>
    <a href="<?php echo url_for('/index.php'); ?>">
      <header>
      
        <div style="float: right; text-align: center; margin-right: 350px; color: white; text-decoration: underline;">
          <h1>Shmuel Safrin</h1>
          <h2>Software Development Services</h2>
        </div>
        <img style="padding-left:10px" src="<?php echo url_for('/images/small_img.png'); ?>" width="100" height="140" alt="" />
      </header>
    </a>
    
