<?php
require_once __DIR__ . '../../models/numero.php';

class NumeroController
{
    private $model;

    public function __construct($conn)
    {
        $this->model = new Numero($conn);
    }


}