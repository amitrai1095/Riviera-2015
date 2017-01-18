<ul id="nav">
  <li><a <?php if (strpos($_SERVER['PHP_SELF'], 'home.php')) echo 'class="current"';?> href="result.php">Home</a></li>
    <li><a <?php if (strpos($_SERVER['PHP_SELF'], 'home.php')) echo 'class="current"';?> href="aevents.php">Approved Events</a></li>
      <li><a <?php if (strpos($_SERVER['PHP_SELF'], 'home.php')) echo 'class="current"';?> href="oevents.php">Onhold Events</a></li>
	      <li><a <?php if (strpos($_SERVER['PHP_SELF'], 'home.php')) echo 'class="current"';?> href="revents.php">Rejected Events</a></li>
  <li><a <?php if (strpos($_SERVER['PHP_SELF'], 'logout.php')) echo 'class="current"';?> href="logout.php">Logout</a></li>
</ul>
<div style="clear:both"></div>
