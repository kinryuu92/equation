<?php
class equation{
    public $a;
    public $b;
    public $c;
    public function __construct($a, $b, $c){
        $this -> a = $a;
        $this -> b = $b;
        $this -> c = $c;
    }
    public function getDiscriminant(){
        return $this->b**2 - (4 * $this->a * $this->c);
    }
    public function getRoot(){
        $delta = $this->b**2 - (4 * $this->a * $this->c);
        if ($delta > 0){
            echo "phuong trinh co 2 nghiem nghiem 1 = ".(-$this->b + $delta) / (2 * $this->a)."<br>";
            echo "Nghiem 2 = ".(-$this->b - $delta) / (2 * $this->a);
        }
        elseif ($delta == 0){
            echo -$this->b/(2 * $this->a);
        }else{
            echo 'The equation has no roots';
        }
    }
}