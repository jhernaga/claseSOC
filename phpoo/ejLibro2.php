<html>
    <head>
        <title>Pruebas</title>
    </head>
    <body>
        <?php
        abstract class User {
            private $username;
            public function setUsername($username){
                $this->username=$username;
            }
            public function getUsername(){
                return $this->username;
            }
            public abstract function stateYourRole();
        }

        class Admin extends User{
            private $rol;
            public function __construct($n, $rol="Admin"){
                $this->setUserName($n);
                $this->rol=$rol;
            }
            public function setUsername($n){
                parent::setUsername($n);
                return "Admin<br>";
            }
            public function sayHello(){
                return "Hello admin, ".$this->getUsername();
            }
            public function stateYourRole(){
                return $this->rol;
            }
        }
        class Viewer extends User{
            private $rol;
            public function __construct($n, $rol="Viewer"){
                $this->setUserName($n);
                $this->rol=$rol;
            }
            public function sayHello(){
                return "Hello viewer, ".$this->getUsername();
            }
            public function stateYourRole(){
                return $this->rol;
            }
        }
        
        $ad1 = new Admin("Jordi");
        echo $ad1->sayHello()."<br>";
        echo $ad1->setUsername("SuperJordi");
        $vi1= new Viewer("Albert", "Viewer");
        echo $vi1->sayHello()."<br>";
        
        ?>
    </body>
</html>