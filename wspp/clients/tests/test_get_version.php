<?php
require_once ('../classes/mdl_soapserver.php');

$client=new mdl_soapserver();
require_once ('../auth.php');
/**test code for get_version
* @param int $client
* @param string $sesskey
* @return  int
*/

$lr=$client->login(LOGIN,PASSWORD);
$res=$client->get_version($lr->getClient(),$lr->getSessionKey());
print($res);
$client->logout($lr->getClient(),$lr->getSessionKey());

?>
