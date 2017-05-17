<html>
    <head>
        <title>Pruebas</title>
    </head>
    <body>
        <?php
        class Car {
            private $marcas= array("Mercedes", "Seat", "Volvo");
            private $model;
            public function __construct($model){
                $this->setModel($model);
                echo "todo bien";
            }
            public function getModel(){
                return "The ".__class__. " model is " . $this -> model." - ".__file__;
            }
            public function setModel($model){
                if(in_array($model, $this->marcas)){
                    $this->model=$model;
                }
            }
        }
        class User {
            private $firstName;
            private $lastName;
            private $sex;
            public function __construct($first,$last, $sex){
                $this->firstName=$first;
                $this->lastName=$last;
                $this->sex=$sex;
            }
            public function getName(){
                return $this->firstName;
            }
            public function getApellido(){
                return $this->lastName;
            }
            public function getFullName(){
                return $this->firstName." ".$this->lastName;
            }
            public function toString(){
                echo $this->firstName." ".$this->lastName." y es un";
                if($this->sex=="hombre")
                    echo " ".$this->sex;
                else
                    echo "a ".$this->sex;
            }
        }
        
        $mercedes = new Car("Volvo");
        $per=new User("John","Doe", "hombre");
        $per2=new User("Federica","Yvorra", "mujer");
        echo $mercedes -> getModel();
        echo "<br>";
        $per->toString();
        echo "<br>";
        $per2->toString();
        echo "<br>";
        echo $per2->getFullName();
        ?>
    </body>
</html>