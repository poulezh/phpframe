<?php

Class Home extends Controller
{
    function index()
    {
        $image_class = $this->loadModel("image_class");
        show($image_class);
        $this->view("home");    
    }

} 