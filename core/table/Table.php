<?php

namespace Core\Table;

use Core\Database\Database;
use PDO;


class Table
{
    protected $_dbinstance;

    protected $table;

    public function __construct(Database $database)
    {
        $this->_dbinstance = $database;
    }

    public function extract($key, $value)
    {
        $records = $this->all();
         $return = [];
        foreach ($records as $v)
        {
            $return[$v->$key] = $v->$value;
        }
        return $return;
    }

    public function all()
    {
        return $this->query("SELECT * FROM " . $this->table." ORDER BY id DESC");
    }
    public function countAll()
    {
        $r =  $this->query("SELECT COUNT(id) as nb FROM " . $this->table." ORDER BY id DESC");

        return $r;
    }
    public function paidToday()
    {
    
        return $this->query("SELECT SUM(montant) as total  FROM operations WHERE created_at>=CURRENT_DATE()");

    }
    public function SoldeToday()
    {
    
        return $this->query("SELECT SUM(montant) as total  FROM operations");

    }
     public function findPaid($id, $champ = 'statut')
    {
       return  $this->query("SELECT COUNT(id) as nb FROM ". $this->table ." WHERE ". $champ ." = ? ", [$id], get_called_class(), true);
    }
     public function findPaidFail()
    {
       return  $this->query("SELECT COUNT(id) as total  FROM operations WHERE statut IS NULL");
    }
    public function PaidFail()
    {
       return  $this->query("SELECT * FROM operations WHERE statut IS NULL limit 12");
    }   
    
    public function findById($id, $champ = 'id')
    {
       return $this->query("SELECT * FROM ". $this->table ." WHERE ". $champ ." = ? ", [$id], get_called_class(), true);
    }
    
    public function delete($table,$id)
    {
        return $this->query(" DELETE FROM " . $table ." WHERE id = ?", [$id], true);
    }

    public function update($id, $fields, $champ = 'id')
    {
       $sql_parts = [];
       $attributes = [];
       foreach ($fields as $key => $v)
       {
           $sql_parts[] = "$key = ?";
           $attributes[] = $v;
       }
       $sql_part = implode(',',$sql_parts);
       $attributes[] = $id;
       return $this->query("UPDATE ". $this->table ." SET $sql_part WHERE $champ = ?", $attributes, true);
    }

    public function save($fields)
    {
        $sql_parts = [];
        $attributes = [];
        foreach ($fields as $key => $v)
        {
            $sql_parts[] = "$key = ?";
            $attributes[] = $v;
        }
        $sql_part = implode(',',$sql_parts);

        return $this->query("INSERT INTO ". $this->table ." SET $sql_part ", $attributes , true);
    }

    public function query($statement, $attributes = null, $one = false)
    {
        if($attributes)
        {
            return $this->_dbinstance->prepare(
                $statement, 
                $attributes,
                str_replace('Table', 'Entity', get_class($this)),
                $one);
        }else {
            return $this->_dbinstance->query(
                $statement,
                str_replace('Table', 'Entity', get_class($this)),
                $one
            );
        }
    }
}