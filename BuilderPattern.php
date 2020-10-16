<?php
class Love{

    private $someone;
    public function __construct($name) {
        $this->someone = $name;
    }
    public function meSay() {
        echo "I" . "\n";
        return $this;
    }

    public function withLove() {
        echo " Love ";
        return $this;
    }

    public function toSomeone() {
        echo $this->someone;
    }
}

$messageLove = new Love("HUONG");
$messageLove->meSay()->withLove()->toSomeone();