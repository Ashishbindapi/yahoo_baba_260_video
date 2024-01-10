<?php 

trait hello{
	private function sayhello(){
		echo "Hello from Hello Trait.\n";
	}
}

class base{
	use hello{
		hello::sayhello as public newhello;
	}
}

$test = new base();

$test->newhello();
?>