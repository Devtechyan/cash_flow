<?php

class Expense extends Controller
{
    private $db;
    function __construct()
    {
        $this->db = new Database;
    }

    public function index()
    {
        $expenses = $this->db->readAll('expenses');
        $data = [
            'title' => 'This is Expense page',
            'expenses' => $expenses,
        ];
        $this->view('expense/index',$data);
    }
}


?>