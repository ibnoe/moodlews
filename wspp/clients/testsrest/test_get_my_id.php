<?php
require_once ('../classes/mdl_soapserverrest.php');

$client=new mdl_soapserverrest();
require_once ('../auth.php');
/**test code for get_my_id
* @param int $client
* @param string $sesskey
* @return  int
*/

$lr=$client->login(LOGIN,PASSWORD);
$res=$client->get_my_id($lr->getClient(),$lr->getSessionKey());
print($res);
$client->logout($lr->getClient(),$lr->getSessionKey());

?>
