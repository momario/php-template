<h1>Welcome!</h1>
<b>This is the first page...</b>
<br>
<!--USE THE VARIABLE DECLARED IN THE CONTROLLER-->
<b>Test variable from home controller: <?php echo $test; ?></b>
<br>
<br>
<a class="test" href="second">SECOND VIEW</a>
<a class="test" href="<?php echo config::$url_third_url; ?>">THIRD VIEW</a>