<?php
/**
 * @author Otavio
 *
 */
class Model {
	public function getlogin()
	{
		// here goes some hardcoded values to simulate the database
		if(isset($_REQUEST['inputUsu']) && isset($_REQUEST['inputPass'])) {
	
			if($_REQUEST['inputUsu']=='admin' && $_REQUEST['inputPass']=='admin') {
				return 'login';
			}
			else{
				return 'invalid user';
			}
		}
	}
}
?>