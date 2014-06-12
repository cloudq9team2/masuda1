<?php
$m = new MongoClient( '131.206.29.116:30000');
$cursor = $m->tem->users->find( array( 'name' => 'marat'));
$result = $cursor->getNext();
echo json_encode( $result); 
?>