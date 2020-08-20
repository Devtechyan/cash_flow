<?php
class Page extends Controller
{
 private $db;
 public function __construct()
 {
  $this->userModel = $this->model('UserModel');
  $this->db = new Database;
 }

 public function index()
 {

  $data = [
   //
  ];
  $this->view('pages/login', $data);

 }

 public function dashboard()
 {

  $income = $this->db->todayTransition('incomes');
  $expense = $this->db->todayTransition('expenses');
  $data = [
   'index' => 'dashboard',
   'income' => $income,
   'expense' => $expense,
  ];
  $this->view('pages/dashboard', $data);

 }

 public function register()
 {
     $this->view('pages/register');
 }

 
}
