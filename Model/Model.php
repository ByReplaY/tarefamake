<?php
/**
 * @author Otavio
 *
 */
class Model {
	public function getlogin()
	{
	    $con = mysql_connect("mysql.hostinger.com.br","u780446149_repla","owning11");
		// here goes some hardcoded values to simulate the database
		if(isset($_REQUEST['inputUsu']) && isset($_REQUEST['inputPass'])) {
	
			if($_REQUEST['inputUsu']=='admin' && $_REQUEST['inputPass']=='admin' && $con){
				return 'login';
			}
			else{
				return print "<div class='alert alert-danger' style='width: 230px;'>
              <button type='button' class='close' data-dismiss='alert'>x</button>
              <b>Oh snap!</b> Usu&aacute;rio Inv&aacute;lido! ou DB 
            </div>";
			}
		}
	}
}
?>