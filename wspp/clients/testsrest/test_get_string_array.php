<?php
require_once ('../classes/mdl_soapserverrest.php');

$client=new mdl_soapserverrest();
require_once ('../auth.php');
/**test code for get_string_array
* @param  
* @return  string[]
*/

$lr=$client->login(LOGIN,PASSWORD);
$res=$client->get_string_array();
print_r($res);
$client->logout($lr->getClient(),$lr->getSessionKey());

?>
