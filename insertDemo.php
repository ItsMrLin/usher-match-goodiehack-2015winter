<html>
<body>
	<form action='db.php?action=insert' method='post' name='value'>
	<?php

	$data = '{"userType": "student","answers":[{"person_id": "himyid","first_name": "Richard","last_name": "Li"}]}';

	echo "<input type='hidden' name='value' value='$data'>";
	?>
	<input type="submit">Go</input>
	</form>
	<script language="JavaScript">
		document.frm.submit();
	</script>
</body>
</html>