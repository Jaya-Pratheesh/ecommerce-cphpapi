<?php
namespace authorisation;

require_once "jwt_auth.php";

class authorise extends \jwtauth\jwt_auth{

public static function auth($req_headers){

	 $outStr = "";

		if(isset($req_headers['token'])){
 
			  if((new self)->jwtAuth($req_headers['token'])){

				return true;
			  }else{

			  	return (new self)->notAuthorised();
			  }

		}else{	

		  return (new self)->notAuthorised();	
		}
	 }

public function notAuthorised(){

 		$this->$outStr = "/Not authorised";

 	echo $this->$outStr;
	} 

}

