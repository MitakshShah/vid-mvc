<?php

/*
 * Base Controller
 * Loads models and views
*/

class Controller {

    //Load model
    public function model($model){
        // Require model file
        require_once '../app/models/' . $model . '.php';
        
        // Instantiate the model
        return new $model();
    }

    public function view($view, $data = []){
        // Check for view file exists
        if(file_exists('../app/views/' . $view . '.php' )){
            require_once '../app/views/' . $view . '.php';
        } else {
            // View doesnot exist
            die('View does not exist ');
        }
    }
}