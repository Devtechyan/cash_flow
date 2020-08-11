<?php

class Income extends Controller
{
    private $db;
    function __construct()
    {
        $this->db = new Database;
    }

    public function index()
    {
        $incomes = $this->db->readAll('incomes');

        $data = [
            'title' => " This is Income Page",
            'incomes' => $incomes
        ];

        $this->view('income/index',$data);
    }
}



?>