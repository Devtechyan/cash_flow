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

        if($success)
        {
            
            //$this->auth->setAuthId($success['id']);

            setMessage('id',base64_encode($success['id'])); 

            $this->db->setLogin($success['id']);
            redirect('page/dashboard');   
        }
        else{
            setMessage('error','Authentication Fail. Please try again !');
            redirect('');
        }

        
    }

    public function register()
    {
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $profile_image = 'default_profile.jpg';
            $token        = bin2hex(random_bytes(50));

            #Input validation
            if (!preg_match('/^[a-zA-Z0-9\s]+$/', $name)) {
                $nameError = 'Name can only contain letters, numbers and white spaces';
            }
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailError = 'Invalid Email';
            }
            
            if (strlen($password) < 6) {
                $passwordError = 'Please enter a long password';
            }
            
            //Hash Password before saving
            $password = base64_encode(($password));


            // Check user exist 

            $isUserExist = $this->db->columnFilter('users','email',$email);
            
            if($isUserExist)
            {
                setMessage("error","This email is already register !");
                redirect('/page/register');
            }

            else{
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

                if($userCreated) 
                {
                    setMessage("success","Successfully Registered . Please log in !");
                    redirect("");
                }

                else 
                {
                    //
                }
            }
            

            }
            
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