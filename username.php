<?php
session_start();

if (isset($_GET['username'])) {
  $_SESSION['name'] = $_GET['username'];
?>
<h1>
  Benvenuto <?php echo $_SESSION['name']; ?>
</h1>

<?php
} elseif (isset($_SESSION['name'])) { ?>
   <h1> Benvenuto di nuovo, <?php echo $_SESSION['name']; ?>!</h1>
<?php
} else { ?>
   <h1> Crea un username</h1>
<?php } ?>
