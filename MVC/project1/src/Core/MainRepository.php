<?php
namespace Web\GradController\Core;

use Web\GradController\Core\Repository;

class MainRepository implements Repository
{
    protected $db;
    private $class;

    public function __construct($class)
    {
        $this->db = DB::getDB();
        $this->class = $class;
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM' . basename(str_replace('\\', '/', $this->class));
        return $this->db->getAll($sql, $this->class);
    }

    /**
     * @param int $id
     * @return bool|mixed
     */
    public function getById(int $id)
    {
        $sql = 'SELECT * FROM' . basename(str_replace('\\', '/', $this->class)) . 'WHERE id=:id';
        return $this->db->paramsGetOne($sql, ['id'=>$id], $this->class);
    }

//    public function save($data)
//    {
//
//    }
    public function save($data)
    {
        // TODO: Implement save() method.
    }
}
