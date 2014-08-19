<?php
class errorsController extends KWController {
	public function __call($name, $arguments)
	{
		$this->view = 'errors';
		$this->error = Stringer::getStringBetween($name, 'e', 'Action');
		
		
		
		// $name is case sensitive
		/*echo "Llamando al método de objeto '$name' "
		. implode(', ', $arguments). "\n";*/
	}
}
?>