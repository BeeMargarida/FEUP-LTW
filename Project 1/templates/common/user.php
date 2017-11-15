<div id="user">
  <?php if (isset($_SESSION['username']) && $_SESSION['username'] != '') { ?>
    <form action="logout.php" method="post">
      <a href="#"><?=$_SESSION['username']?></a> 						<!-- Add user page ref -->
      <input type="submit" value="Logout">
    </form>
  <?php } else { ?>
    <form action="login.php" method="post">
      <input type="text" placeholder="username" name="username">
      <input type="password" placeholder="password" name="password">
      <div>
        <input type="submit" value="Login">
        <a href="templates/user/register_form.php">Register</a>
      </div>
    </form>
  <?php } ?>
</div>