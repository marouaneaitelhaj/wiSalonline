<?php
class home extends controller{
    public function __construct()
    {
        $this->model('Database');
        $readperson = $this->model('crud');
        $this->view('index', ['readperson' => $readperson->readperson()]);
    }
}