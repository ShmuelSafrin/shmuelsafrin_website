<style>
    button {
    float : right;
    border: 1px color:black;
    background-color: lightgray;
    /*padding: 15px 32px;*/
    float: left;
    /*display: inline-block;*/
    font-size: 20px;
    cursor: pointer;
    }
    button:hover {
      background-color: gray; 
      color: red;
    }
</style>
<?php
  if(!isset($page_title)) { $page_title = 'Staff Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title><?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>" />
  </head>

  <body>
    <header>
      <h1>Staff Area</h1>
    </header>
    <navigation>
      <a href="<?php echo url_for('/../public/main.php'); ?>"><button>Quit Adminstration Area</button></a>
      <ul>
        <li style="font-weight: bold; float: center; margin-left: 500px;">User: <?php echo $_SESSION['username'] ?? ''; ?></li>
        <li style="float: right;"><a href="<?php echo url_for('/staff/logout.php'); ?>">Logout</a></li><br><br>
        <li><a href="<?php echo url_for('/staff/index.php'); ?>" style="font-weight: bold;">Staff Menu</a></li>
      </ul>
    </navigation>

    <?php echo display_session_message(); ?>
