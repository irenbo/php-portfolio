<?php
namespace Web\GradController\Models;

use Web\GradController\Core\DB;
use Web\GradController\Core\Repository;

class UserRepository implements Repository
{
    private $db;

    public function __construct()
    {
        $this->db = DB::getDB();
    }

    public function getAll()
    {
    }

    public function getById(int $db)
    {
    }

    public function save($params)
    {
        $sql = 'SELECT * FROM User WHERE email=:email';
        $email = $params['email'];

        $result = $this->db->paramsGetOne($sql, ['email'=>$email]);
        if (!$result) {
            $sql = 'INSERT INTO User (`name`, email, hash, phone, role) VALUES (:username, :email, :hash, :phone, :role)';
            return $this->db->nonSelectQuery($sql, $params);
    }



    }

    public function isAuth($post){ //проверять открыта ли сессия!
        $sql = 'SELECT * FROM User WHERE email=:email';
        $params = [
            'email' =>$post['email']
        ];
        $result = $this->db->paramsGetOne($sql, $params);
        if (!$result) return false;
        if (!password_verify($post['password'], $result['hash'])) return false; //$post['password'] - это то, что вводит пользователь; $result['hash'] - это то, что хранится в базе. Это валидация данных пользователя. Все данные хранятся в массиве в базе.
        session_start(); //запускаем сессию и кладем данные в сессию (в массив)
        $_SESSION['name'] = $result['name']; //в сессию кладем имя
        $_SESSION['role'] = $result['role']; //в сессию кладем роль
        return true;
    }
}