<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["username"]) && isset($_POST["password"])){

        $valid_username = "";
        $valid_password = "penis";

        $entered_username = $_POST["username"];
        $entered_password = $_POST["password"];

        if($entered_username == $valid_username && $entered_password == $valid_password){
            echo "Login erfolgreich!";
        }else{
            echo "Fuck off!";
        }
    }
}