<!DOCTYPE html>

<html lang="en">

<head>

</head>

<body>

<?php

class Product

{

public $name;

public $genre;

public $listen;

/**

* @param string $name

* @param string $genre

* @param int $listen

*/

public function __construct(string $name, string $genre, int $listen)

{

$this->name = $name;

$this->genre = $genre;

$this->listen = $listen;

}

public function getName()

{

return $this->name;

}

}

?>

</body>

</html>