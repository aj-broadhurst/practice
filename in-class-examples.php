<?php
function typeHintingFunction(string $typeHint) {
	echo "Well done! You were able to pass the type hint!" . PHP_EOL;
}

try {
	$array = [];
	typeHintingFunction($array);
} catch(TypeError $typeError) {
	echo "Oh snap! Type error says, \"" . $typeError->getMessage() . "\"" . PHP_EOL;
}

class TypeHintingClass {
	public function typeHintingFunction(string $typeHint) {
		echo "Well done! You were able to pass the type hint!" . PHP_EOL;
	}
}

try {
	$array = [];
	$typeHintingObject = new TypeHintingClass();
	$typeHintingObject->typeHintingFunction($array);
} catch(TypeError $typeError) {
	echo "Oh snap! Type error says, \"" . $typeError->getMessage() . "\"" . PHP_EOL;
}
