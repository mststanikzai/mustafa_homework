<?php

// Full Name: YOUR FULL NAME
// Student ID: YOUR STUDENT ID


// Task 1
class Library
{
    // This is a constant because the maximum number of books does not change.
    const MAX_BOOKS = 3;
}

echo "Maximum books allowed: " . Library::MAX_BOOKS;
echo "<br><br>";


// Task 2
class StudentCounter
{
    public static $count = 0;

    public static function addStudent()
    {
        self::$count++;
    }
}

StudentCounter::addStudent();
StudentCounter::addStudent();
StudentCounter::addStudent();

echo "Total students: " . StudentCounter::$count;
echo "<br><br>";


// Task 3
abstract class Vehicle
{
    abstract public function start();
}

class Car extends Vehicle
{
    public function start()
    {
        echo "Car engine started.";
    }
}

class Bike extends Vehicle
{
    public function start()
    {
        echo "Bike started.";
    }
}

$car = new Car();
$bike = new Bike();

$car->start();
echo "<br>";
$bike->start();

?>


Maximum books allowed: 3

Total students: 3

Car engine started.
Bike started.