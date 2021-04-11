<?php
require_once 'init.php';

switch ($action) {
	default :
		include_once $conf->root_path.'/app/controllers/CalcControl.class.php';
		
		$ctrl = new app\controllers\CalcControl ();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		include_once $conf->root_path.'/app/controllers/CalcControl.class.php';
		
		$ctrl = new app\controllers\CalcControl ();
		$ctrl->process ();
	break;
}
?>