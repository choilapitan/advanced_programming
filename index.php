<?php
    class User{
        //PROPERTIES
        public $name;
        public $username;
        public $email;

        function addFriend($name) {
            echo $name. " Added a friend.";
        }
        function postStatus($name) {
            echo $name. " Posted a status.";
        }
    }
        //METHOD
        $example = new User();
        echo $example->addFriend('Choi');
        echo "<br>";
        echo $example->postStatus('Choi');  
?>