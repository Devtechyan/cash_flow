<?php

class Auth extends Controller {

    private $db;
    private $auth;
    function __construct()
    {
        $this->model('UserModel');
        // $this->model('AuthModel');
        // $this->auth = new AuthModel();
        $this->db = new Database;
    }

    public function login()
    {

        $email = $_POST['email'];
        $password = base64_encode($_POST['password']);

        $success = $this->db->loginCheck($email,$password);

        redirect('page/dashboard');
        //print_r($success);
        if($success)
        {
            
           setMessage('id',base64_encode($success['id']));
          
            // $this->db->setLogin($success['id']);
            // redirect('page/dashboard');   
        }
        else{
            setMessage('error','Authentication Fail. Please try again !');
            //redirect('');
        }
    }

    public function register()
    {
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            
            // Check user exist 
            $email = $_POST['email'];
            $isUserExist = $this->db->columnFilter('users','email',$email);
            if($isUserExist)
            {
                setMessage("error","This email is already register !");
                redirect('/page/register');
            }
            else
            {
            
            // Validate entries
            $validation = new UserValidator($_POST);
            $data       = $validation->validateForm();
            if (count($data) > 0) {
                $this->view('pages/register', $data);
            }
            else{
                $name = input($_POST['name']);
                $email = input($_POST['email']);
                $password = input($_POST['password']);

                $profile_image = 'default_profile.jpg';
                $token        = bin2hex(random_bytes(50));
                
                //Hash Password before saving
                $password = base64_encode(($password));

                $user = new UserModel();
                $user->setName($name);
                $user->setEmail($email);
                $user->setPassword($password);
                $user->setToken($token);
                $user->setProfileImage($profile_image);
                $user->setIsLogin(0);
                $user->setIsActive(0);
                $user->setIsConfirmed(0);
                $user->setDate(date('Y-m-d H:i:s'));

                $userCreated = $this->db->create('users', $user->toArray());
                //$userCreated="true";
        
                if($userCreated) 
                {  
                    //Instatiate mail
                    $mail = new Mail();
                    
                    $verify_token = URLROOT.'/auth/verify/'.$token;
                    $mail->verifyMail($email,$name,$verify_token);
                    
                    setMessage("success","Please check your inbox to verify your email address !");
                
                }

                redirect('');

                }  // end of validation check

            }  // end of user-exist

            }
            
        }

        public function verify($token)
        {
            $user = $this->db->columnFilter('users','token',$token);

            if($user)
            {
               $success =  $this->db->verify($user[0]['id']);

               if($success)
               {
                   setMessage("success","Successfully Verified . Please log in !");
                 
               }
               else{
    
                setMessage("error","Fail to Verify . Please try again!");
    
               }
            }

            else 
            {
                setMessage("error","Incrorrect Token . Please try again!");
            }

            redirect("");
        }

        public function logout()
        {   
            session_start();
            $this->db->unsetLogin(base64_decode($_SESSION['id']));
            
            //$this->db->unsetLogin($this->auth->getAuthId());
            
            redirect('');
        }
    
}

?>