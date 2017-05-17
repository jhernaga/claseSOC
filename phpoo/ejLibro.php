<html>
    <head>
        <title>Pruebas</title>
    </head>
    <body>
        <?php
        class User {
            private $username;
            public function setUserName($username){
                $this->username=$username;
            }
            public function getName(){
                return $this->username;
            }
        }

        class Admin extends User{
            public function __construct($n){
                $this->setUserName($n);
            }
            public function getRol(){
                return "Admin";
            }
            public function sayHello(){
                return "Hello admin, ".$this->getName();
            }
        }
        
        $ad1 = new Admin("Jordi");
        echo $ad1->sayHello();
        ?>
    </body>
</html>