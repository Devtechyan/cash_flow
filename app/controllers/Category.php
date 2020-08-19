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
        $categories = $this->db->categoryView('categories');
        $data = [
            'title' => "This is Category Page",
            'categories'  => $categories,
            'index'  => 'category',
        ];  
        $this->view('category/index',$data);
        
    }

    public function create()
    {
        $types = $this->db->readAll('types');
        $data = [
            'types' => $types,
            'index'  => 'category',
        ];
        $this->view('category/create',$data);
    }

    public function store()
    {
       
       if($_SERVER['REQUEST_METHOD']=="POST")
       {
          $name = $_POST['name'];
          $type_id = $_POST['type_id'];
          $description = $_POST['description'];
            
          $this->model('CategoryModel');

          $category = new CategoryModel();
          $category->setName($name);
          $category->setType($type_id);
          $category->setDescription($description);

          $categoryCreate = $this->db->create('categories',$category->toArray());

          if($categoryCreate)
          {
            setMessage('success','Successfully Created New Category !');
          }

          
       }
       redirect('category');
       
    }

    public function edit($id){

        $types = $this->db->readAll('types');
        $category = $this->db->getById('categories',$id);
        $data = [
            'category' =>$category,
            'types' => $types,
            'index'  => 'category',
        ];

        $this->view('category/edit',$data);
    }

    public function update()
    {
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $type_id = $_POST['type_id'];
            $description = $_POST['description'];

            $this->model('CategoryModel');

            $category = new CategoryModel();
            $category->setId($id);
            $category->setName($name);
            $category->setType($type_id);
            $category->setDescription($description);

            $updated = $this->db->update('categories',$category->getId(),$category->toArray());

            if($updated)
            {
             setMessage('success','Successfully Updated !');
            }
        }

        redirect('category');
    }

    public function destory($id)
    {

       
        $id = base64_decode($id);
        
        $this->model('CategoryModel');

        $category = new CategoryModel();
        $category->setId($id);

        $deleted = $this->db->delete("categories",$id);

        if($deleted)
        {
            setMessage('success','Successfully Deleted !');
        }

        redirect('category');
    }
}


?>