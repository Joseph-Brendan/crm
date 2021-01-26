<?php require_once('lib/PageTemplate.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php if(isset($tpl->ContentHead)) { include $tpl->ContentHead; } ?>

	<title><?php if(isset($tpl->PageTitle)) { echo $tpl->PageTitle; } ?> | Nigerian Army</title>
</head>

<body>
<div id="content">
	<?php if(isset($tpl->ContentBody)) { include $tpl->ContentBody; } ?>
</div>


<?php if(isset($tpl->ContentFooter)) { include $tpl->ContentFooter; } ?>
</body>
</html>
