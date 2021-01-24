<form method="post">
	<span>LOGIN</span>
	<br>
	<input type="text" name="username" placeholder="USERNAME" required>
	<br>
	<input type="password" name="password" placeholder="PASSWORD" required>
	<br>
	<input type="submit">
</form>

<form method="post">
	<span>DATE AND TIME</span>
	<br>
	<input type="date" name="date" required>
	<br>
	<input type="time" name="time" required>
	<br>
	<input type="reset">
	<br>
	<input type="submit">
</form>

<form method="post">
	<span>IP ADDESS INPUT</span>
	<br>
	<input type="text" name="ipaddress" pattern="^((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$" title="IP" placeholder="X.X.X.X" value="10.2.0.251" required>
	<br>
	<select name="subnetmask">
		<?php foreach(range(0,32) as $subnetmask): ?>
			<?php if($subnetmask==24): ?>
				<option selected><?= "/".$subnetmask; ?></option>
			<?php else: ?>
				<option><?= "/".$subnetmask; ?></option>
			<?php endif; ?>
		<?php endforeach; ?>
	</select>
	<br>
	<input type="submit">
</form>
