<?php


class User{
    //Attributes
    public $name;
    private $email;
    public $password;

    public function __construct($name, $email,$password){
        $this->name=$name;
        $this->email=$email;
        $this->password=$password;
    }
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    
}

//Instantiate a user object
$user1 = new User("Hamad",'hamad_laaboun@gmail.com','1234');
//user1.name = "Hamad"; //! in java
// $user1->name = "Hamad"; //! in php


var_dump($user1);
echo '<br>'.$user1->name . '<br>';
var_dump($user1->name);

//change the name by setter function
$user1->set_name("Ibrahim");
echo '<br> Get name after changed = '.$user1->name . '<br>';


//Inheritance

class Employee extends User{
     public $title;
    public function __construct($name,$email,$password,$title){
        parent::__construct($name,$email,$password);
        $this->title=$title;
    }
}

$employee1= new Employee("hamad","gmail.com","1234","CEO");

echo $employee1->title;


?>