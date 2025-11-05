<?php
// abstract class Shape {
//     abstract public function area();

//     public function display() {
//         echo "this  is a shape.<br>";
//     }
// }

// class Circle extends Shape {
//     private $radius;


//     public function __construct($radius) {
//         $this->radius = $radius;
//     }

//     public function area() {
//         return 3.14 * $this->radius * $this->radius;
//     }
// }

// $circle = new Circle(5);
// $circle->display();
// echo "Area of the circle: " . $circle->area();
// interface Vehicle {
//     public function move(); 
// }

// class Machine {
//     public function start() {
//         echo "machgine is started"."<br>";
//     }
// }

// class Car extends Machine implements Vehicle {

//     public function move() {
//         echo "car is moving \n";
//     }

//     public function stop() {
//         echo "car has stopped"."<br>";
//     }
// }

// $myCar = new Car();  
// $myCar->start();     


// $myCar->move();      
// $myCar->stop();      


// class MathOperation {
//     public function __call($name, $arguments) {
//         if ($name === 'multiply') {
//             $count = count($arguments);
//        if ($count === 2) {
//               return $arguments[0] * $arguments[1];
//       } elseif ($count === 3) {
//                 return $arguments[0] * $arguments[1] * $arguments[2];
//          } else {
//             return " invalid number of args";
//             }
//         }
//     }
// }

// $obj = new MathOperation();
// echo $obj->multiply(2, 3);
// echo $obj->multiply(2, 3, 4);
// echo $obj->multiply(2);


class AreaCalculator {
    public function area($length, $width = null) {
        if ($width === null) {
            return $length * $length;
                 }    else {
        
    return $length * $width;
        }
    }
}

$calculator = new AreaCalculator();
echo "area  of Square (side = 5): " . $calculator->area(5) . "<br>";
echo "area of Rectangle (length = 5, width = 10): " . $calculator->area(5, 10) . "<br>";



?>


