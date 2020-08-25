<?php
class Page extends Controller 
{
 private $db;
 private $mail;
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
  $expense = $this->db->expenseTransition('expenses');
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

 public function mail()
 {

   // Instatiate mail
   $mail = new Mail();

   $mail->mailTo('info.ivhub@gmail.com','IT Vision Hub');

   return redirect("");
 }

 
}
