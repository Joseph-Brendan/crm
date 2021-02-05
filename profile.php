<?php

include('config/session.php');

require_once('lib/PageTemplate.php');

if (!isset($tpl)) {
	$tpl = new PageTemplate();
	$tpl->PageTitle = 'Technician Profile';
	$tpl->ContentHead = 'contents/content-head.php';
	$tpl->ContentBody = 'contents/profile.php';
	$tpl->ContentFooter = 'contents/content-footer.php';

	include "layouts/layout.php";
}
