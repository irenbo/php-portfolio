<?php
namespace Web\GradController\Controllers;

use Web\GradController\Core\Controller;
use Web\GradController\Models\UserRepository;

class AccountController extends Controller
{
    private $userRepository;
    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function registrationAction() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $data = [
            'title' =>'Регистрация'
        ];
        echo $this->renderPage('registration.php', 'template.php', $data);
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $post = $_POST;
            $params = [
                'username' => $post['name'],
                'email' => $post['email'],
                'hash' => password_hash($post['password'], PASSWORD_DEFAULT),
                'phone' => $post['phone'],
                'role' => "USER"

            ];
            //var_dump($params);
            if ($this->userRepository->save($params)){
                $data = [
                    'title'=>'Регистрация'
                ];
                echo $this->renderPage('registration.php', 'template.php', $data);
            } else {
                header('Location: /');
            }
        }
    }

    public function authAction(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $post = $_POST;
            if (!$this->userRepository->isAuth($post)) {
                header('Location: /');
            }
            header('Location: /account');
        }
    }

    public function indexAction() {
        session_start();
        //var_dump($_SESSION);
        if (!isset($_SESSION['name'])) header ('Location: /');
        $accountPage = ($_SESSION['role'] == "ADMIN") ? 'admin_account.php' : 'user_account.php';

        $data = [
            'title' => 'Личный кабинет',
            'name' =>   $_SESSION['name'],
            'auth' => isset($_SESSION['name']) //true или false
        ];

        echo $this->renderPage($accountPage, 'template.php', $data);


    if (!$this->userRepository->isAuth($post)) {
                header('Location: /');              
            }
            header('Location: /account');
    }

    public function logoutAction() {
        session_start();
        session_destroy();
        $_SESSION = [];
        header('Location: /');
    }
}