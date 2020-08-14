<?php
class Page extends Controller
{
 private $db;
 public function __construct()
 {
  $this->userModel = $this->model('User');
  $this->db = new Database;
 }

 public function index()
 {

  $data = [
   'index' => 'dashboard'
  ];
  $this->view('pages/dashboard', $data);

 }

 public function dashboard()
 {

  $data = [
   'index' => 'dashboard'
  ];
  $this->view('pages/dashboard', $data);

 }

 
}
