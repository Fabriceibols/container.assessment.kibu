<?php


namespace Containers;

use Container;

require_once 'ContainerInterface.php';

class Calculation implements Container{
        
        public function square($width, $length)
        {
            return $width * $length;
        }

        public function circle($radius)
        {
            return $radius * 2;
        }


}
