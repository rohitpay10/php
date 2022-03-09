<?php 


include_once __DIR__.'/pay10_helper.php';
include_once __DIR__.'/config.php';

$pay10_transaction = new Pay10PGModule;
$pay10_transaction->setSalt($global_vars['SALT']);
$pay10_transaction->setMerchantHostedKey($global_vars['HOSTED_KEY']);
$string = $pay10_transaction->aes_decryption($_POST['ENCDATA']);
//echo json_encode($data); 

 ?>
 <pre><?php print_r($_POST); ?></pre>
 <pre><?php print_r($pay10_transaction->split_decrypt_string($string)); ?></pre>
