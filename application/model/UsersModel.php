<?php


namespace Application\Model;


class UsersModel extends Model
{

    public function all()
    {
        return $this->selectAll("users");
    }
    public function insertUser($values)
    {
        $query = "INSERT INTO `users`(`name`, `family`, `email`, `phone`, `address`) VALUES(?,?,?,?,?)";
        $this->execute($query,array_values($values));
        $this->closeConnection();
    }
}
