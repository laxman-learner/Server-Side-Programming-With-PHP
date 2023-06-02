 <?php
 //  single inheritance - class derives another single class

 // parent class
 class Employee
 {
     public $id;
     public $name;
     public $salary;
     public function setValues($id, $name, $salary)
     {
         $this->id = $id;
         $this->name = $name;
         $this->salary = $salary;
     }
 }
 // derived class

 class Manager extends Employee
 {
     public function getValues()
     {
         echo "Emp ID : $this->id <br>";
         echo "Name : $this->name <br>";
         echo "Salary : $this->salary <br>";
     }
 }

 echo '<b>Single Inheritance </b> <br> ';
 $emp1 = new Manager();
 $emp1->setValues('EMP 101', 'Rohan Preet', '90k'); // call to method of parent class
 $emp1->getValues();

 $emp2 = new Manager();
 $emp2->setValues('EMP 102', 'Laxmi Narayan', '80k'); // call to method of parent class
 $emp2->getValues();

 // multilevel inheritance - class derives another derived class
 class CEO extends Manager
 {
     public $position;
     function setPosition($position)
     {
         $this->position = $position;
     }
     function getPosition()
     {
         echo " $this->position Position <br>";
     }
 }

 echo '<br> <b> Multi-Level Inheritance </b> <br> ';
 $emp3 = new CEO();
 $emp3->setValues('EMP 103', 'Rohit Jan', 50000);
 $emp3->setPosition('Executive');
 $emp3->getValues();
 $emp3->getPosition();

 // hierarchical inheritance - parent class is derived by multiple child classes and so on

 class Worker extends Employee
 {
     function display()
     {
         echo "Emp ID : $this->id <br>";
         echo "Name : $this->name <br>";
         echo "Salary : $this->salary <br>";
     }
 }

 class Swipper extends Employee
 {
     public $post;
     function read($post)
     {
         $this->post = $post;
     }
     function show()
     {
         echo "$this->post Post";
     }
 }
 echo ' <br> <b> Hierarchical Inheritance </b> <br> ';
 $emp4 = new Worker();
 $emp4->setValues('EMP 104', 'Mahadev Budha', '70k');
 $emp4->display();

 $emp5 = new Swipper();
 $emp5->setValues('EMP 105', 'Kausav Bista', '80k');
 $emp5->read('Managerial');
 $emp5->show();


?>
