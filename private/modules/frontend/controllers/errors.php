<?php
class errorsController extends KWController {
	public function __call($name, $arguments)
	{
		$this->view = 'errors';
		$this->error = Stringer::getStringBetween($name, 'e', 'Action');
		
		
		
		// $name is case sensitive
		/*echo "Llamando al m�todo de objeto '$name' "
		. implode(', ', $arguments). "\n";*/
	}
}
?>