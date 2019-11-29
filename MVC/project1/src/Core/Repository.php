<?php
namespace Web\GradController\Core;

interface Repository
{
    public function  getAll();
    public function getById(int $db);
    public function save($data);
}