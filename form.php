<!DOCKTYPE html>
<html>
<head><title>Page1</title></head>
<body>
<h2 align=center>Quotations</h2>
<form action="d2.php" method=post>
<input type=hidden name=moment value="<?php echo strftime("%Y%m%d%H%M%S"); ?>">
<textarea name=line placeholder="Write a quote..."></textarea>
<button type=submit>POST</button>
</form>
</body>
</html>
