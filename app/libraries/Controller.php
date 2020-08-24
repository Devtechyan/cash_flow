<?php
/*
 * Base Controller
 * Load the models and views
 */

class Controller
{

 private $userId;

 public function setUserId($id)
 {
    $this->userId = $id;
 }

 public function getUserId()
 {
    return $this->userId;
 }

 // Load model
 public function model($model)
 {
  // Require model file
  require_once '../app/models/' . $model . '.php';

  // Instatiate model
  return new $model();
 }

//  public function mail()
//  {
//   // Require model file
//   require_once '../app/helper/mail.php';

//   // Instatiate model
//   return new mail();
  
//  }

 // Load View
 public function view($view, $data = [])
 {
  //Check for view file
  $viewFile = '../app/views/' . $view . '.php';
  if (file_exists($viewFile)) {
   require_once $viewFile;
  } else {
   //View does not exist
   die('View does not exits');
  }
 }
}