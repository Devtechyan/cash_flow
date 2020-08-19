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
        
        $incomes = $this->db->incomeView();
        $data = [
            'title' => " This is Income Page",
            'incomes' => $incomes,
            'index'  => 'income',
        ];

        $this->view('income/index',$data);
    }

    public function create()
    {
        $categories = $this->db->readAll('categories');

        $data = [
            'categories' => $categories,
            'index'  => 'income',
        ];

        $this->view('income/create',$data);
    }

    public function store()
    {   
        
        if($_SERVER['REQUEST_METHOD']== 'POST')
        {
            $amount = $_POST['amount'];
            $category_id = $_POST['category_id'];

            session_start();
            $user_id = base64_decode($_SESSION['id']);
            
            $date = date("Y/m/d");

            $this->model('IncomeModel');
            $income = new IncomeModel();
            $income->setAmount($amount);
            $income->setCategory($category_id);
            $income->setUser($user_id);
            $income->setDate($date);
            $incomeCreated = $this->db->create('incomes',$income->toArray());
        }

        redirect('income');

    }

    public function edit($id)
    {
        $categories = $this->db->readAll('categories');
        $income = $this->db->getById('incomes',$id);

        $data = [
            'categories' => $categories,
            'income' => $income
        ];

        $this->view('income/edit',$data);

    }


    public function update()
    {
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $id = $_POST['id'];
            $amount = $_POST['amount'];
            $category_id = $_POST['category_id'];
            $user_id = $_POST['user_id'];
            $date = $_POST['date'];

            $this->model('IncomeModel');

            $income = new IncomeModel();
            $income->setId($id);
            $income->setAmount($amount);
            $income->setCategory($category_id);
            $income->setUser($user_id);
            $income->setDate($date);

            $updated = $this->db->update('incomes',$income->getId(),$income->toArray());

            if($updated)
            {
                setMessage('success',"Successfully Updated !");
            }

            redirect('income');
        }
    }

    public function destory($id)
    {
        $id = base64_decode($id);
        $this->model('IncomeModel');

        $income = new IncomeModel();
        $income->setId($id);

        $deleted = $this->db->delete('incomes',$income->getId());

        if($deleted)
        {
            setMessage('success',"Successfully Deleted");
        }

        redirect('income');
    }
}



?>