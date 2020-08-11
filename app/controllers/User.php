<?php
class User extends Controller
{
 private $db;
 public function __construct()
 {
  $this->db        = new Database;
 }

 public function index()
 {
     
  $user = $this->db->getById("users",2);
  $data = [
   'title' => 'Welcome',
   'user'  => $user,
  ];
  $this->view('user/index', $data);

 }

 
 public function create()
 {
  echo "This is user create";
 }

 public function add()
 {
     echo "this is add";
 }

 public function remove()
 {
     echo "This is remove method";
 }

}