<!DOCTYPE html>
<html>
<body>

<?php
class Person {
    public $name;
    public $age;

    public function setinfo($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getinfo() {
        echo "Name: " . $this->name;
        echo "<br>";
        echo "Age: " . $this->age;
        echo "<br>";
    }
}

$person1 = new Person();
$person2 = new Person();
$person1->setinfo("Asmita", 19);
$person2->setinfo("Rohit", 20);
$person1->getinfo();
$person2->getinfo();
?>

</body>
</html>
