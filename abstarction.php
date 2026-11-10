<?php

class Car{
    
    public function start(){
        $this->igniteEngine();
    }

    private function igniteEngine(){
        echo "Functionality of the vehicle engine";
    }

}

$car01=new Car();

$car01->start();


/* output

Engine started

Abstraction means hiding unnecessary implementation details and exposing only the essential functionality.

*/