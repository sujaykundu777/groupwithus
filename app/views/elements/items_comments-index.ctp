<?php
	echo $this->requestAction(array('controller' => 'item_comments', 'action' => 'index'), array('named' => array('admin' => false, 'item_id' => $item_id), 'return'));
?>