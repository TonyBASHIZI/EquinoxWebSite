<?php
namespace App\Table;

use Core\Database\Database;
use Core\Table\Table;


class OperationTable extends Table
{
     protected $table = 'operations';

     public function __construct(Database $database)
     {
         parent::__construct($database);
     }

   
}