<?php
trait MyTraid{
    public function fly(){
        echo "I am flying<br>";
    }
}

class Plain{
    use MyTraid;
}

class Helicopter{
    use MyTraid;
}

$a = new Plain();
$b = new Helicopter();

$a->fly();
$b->fly();

?>