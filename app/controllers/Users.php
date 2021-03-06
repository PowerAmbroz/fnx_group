<?php


class Users extends Controller
{
    /**
     * @var mixed
     */
    private $userModel;

    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function login(): array
    {
        $data = [
            'title' => 'Login Page',
            'email' => '',
            'password' => '',
            'emailError' => '',
            'passwordError' => '',
        ];
//        check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//        Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'emailError' => '',
                'passwordError' => '',
            ];

//            Validate email
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter an Email';
            }

//            Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter an Password';
            }

//            Check if all errors are empty
            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->userModel->login($data['username'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['passwordError'] = 'Password or Email is incorrect. Try Again';
                    $this->view('users/login', $data);
                }
            }
        } else {
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => '',
            ];
        }

        $this->view('users/login', $data);
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['wallet'] = $user->wallet;
        $_SESSION['error_response'] = '';
        $_SESSION['success_response'] = '';
        header('location:' . URLROOT);
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['wallet']);
        unset($_SESSION['error_response']);
        unset($_SESSION['success_response']);
        session_destroy();
        header('location:' . URLROOT . '/users/login');
    }

    public function myarticles(): array
    {
        $user_id = $_SESSION['user_id'];
        $getBoughtArticles = $this->userModel->getBoughtArticles($user_id);
        $this->view(
            'users/myarticles',
            [
                'getBoughtArticles' => $getBoughtArticles
            ]
        );
    }

}