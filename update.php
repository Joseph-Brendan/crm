<?php

include('config/session.php');

require_once('lib/PageTemplate.php');

if (!isset($tpl)) {
	$tpl = new PageTemplate();
	$tpl->PageTitle = 'Dashboard';
	$tpl->ContentHead = 'contents/content-head.php';
	$tpl->ContentBody = 'contents/update.php';
	$tpl->ContentFooter = 'contents/content-footer.php';

	include "layouts/layout.php";
}
