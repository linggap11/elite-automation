<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['fullname', 'company', 'email', 'address', 'username', 'password', 'photo', 'role', 'under_comp'];
    protected $db = "";

    public function getAllUser($underComp)
    {
        $this->db = \Config\Database::connect();
        $query = $this->db->query("SELECT * FROM users WHERE role <> 'superadmin' AND under_comp='$underComp' ORDER BY fullname ASC ");
        return $query;
    }
}
