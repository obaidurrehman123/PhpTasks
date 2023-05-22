<?php
/// TAST 1 CALCULATOR
?>
<?php
class Calculator {
  public $x;
  public $y;
  public $symbol;
    
  function __construct($x,$y,$symbol) {
    $this->x = $x;
    $this->y=$y;
    $this->symbol=$symbol; 
  }
  function calculateResult() {
    $result=0;
    if($this->symbol == "+"){
    $result = $this->x + $this->y; 
    }else if($this->symbol == "-"){
        $result = $this->x - $this->y; 
    }else if($this->symbol == "*"){
        $result = $this->x * $this->y; 
    }else if($this->symbol == "/"){
        $result = $this->x / $this->y; 
    }else if($this->y == 0 && $this->symbol == "/"){
        return -1;
    }else if($this->symbol != "+" && $this->symbol != "-" && $this->symbol!="/" && $this->symbol!="*"){
        return 0;
    }
    return $result;
  }
}
$calculator = new Calculator(10, 5, "+");
$result = $calculator->calculateResult();
echo "Result: " . $result;
?>
<?php
//TASK 2 --- DIVISIBLE BY 3
?>

<?php
function divisibleByThree($array) {
    $count = 0;
    foreach ($array as $value) {
        if ($value % 3 == 0) {
            $count++;
        }  
        if ($value >= 300 && $value % 3 == 0) {
            $count = 0;
        }
    }
    return $count;
}
divisibleByThree([0, 3, 6, 9, 12]);
?>