<?php

class Category extends Controller
{
    private $db;
    function __construct()
    {
        $this->db = new Database;
    }

    public function index()
    {
        $categories = $this->db->readAll('categories');

        $data = [
            'title' => "This is Category Page",
            'categories'  => $categories,
        ];  
        $this->view('category/index',$data);
        
    }
}


?>