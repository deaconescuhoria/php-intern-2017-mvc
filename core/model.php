<?php
class Model
{
    public $db;



    public function load($model) {
            $model_name = 'Model_'.$model;

            // load file with model

            $model_file = strtolower($model_name).'.php';
            $model_path = "models/".$model_file;

            if(file_exists($model_path))
            {
                include "models/".$model_file;

                return new $model_name;

            } else {
                Application::ErrorPage404('no model found');

            }
    }

    public function get_data()
    {


    }
}