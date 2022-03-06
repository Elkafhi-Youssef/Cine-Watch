<?php


class AllPosts extends Controller
{

    public function __construct()
    {

        $this->setModelInstance('users');
        // $this->setModelInstance('posts');
    }
    public function index()
    {
    $data1 = $this->modelInstance->getAllMovies();
    // print_r($data1);
    // die();
    $data2 = $this->modelInstance->getAllSerials();
         $data = [$data1,$data2];
        $this->loadView('user/allPosts', $data);
    }

    public function login()
    {
        if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
            
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            //assciative arrays
            $data = [
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'error_email' => '',
                'error_password' => ''
            ];
            
            
            if (empty($data['email'])) {
                $data['error_email'] = 'Please fill your email';
            }
            if (empty($data['password'])) {
                $data['error_email'] = 'Please fill your password';
            }
            if (empty($data['email']) && empty($data['error_password']) && empty($data['user'])) {
                $password_err = 'Please fill your eamil and password and user type';
            }
            

            if (empty($email_err) && empty($password_err)) {

                // $dt = call function here
                $dt = $this->modelInstance->login($data['email'], $data['password']);
                if ($dt) {

                    $_SESSION['email'] = $data['email'];
                    $_SESSION['user_id'] = $dt['id_user'];
                    $_SESSION['fullname'] = $dt['Fullname'];
                    print_r($_SESSION);
                    
                    $this->redirect(URLROOT . '/AllPosts');
                } else {
                    //password incorrect
                    $data = [

                        'email_error' => 'password or email incorrect',
                        'password_error' => 'password or email incorrect',
                    ];
                    print_r($data);
                    $this->loadView('user/login',$data);
                }
            }
        } else {
            $this->loadView('user/login',[]);
        }
    }
}
