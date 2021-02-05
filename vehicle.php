<?php

include('config/session.php');

require_once('lib/PageTemplate.php');

if (!isset($tpl)) {
	$tpl = new PageTemplate();
	$tpl->PageTitle = 'Vehicles';
	$tpl->ContentHead = 'contents/content-head.php';
	$tpl->ContentBody = 'contents/vehicle.php';
	$tpl->ContentFooter = 'contents/content-footer.php';

	include "layouts/layout.php";
}
