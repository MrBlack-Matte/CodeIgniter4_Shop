<?php  namespace App\Models; 
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'contact_tbl';
    protected $allowFields = ['name','email','phone_num','message']; 
}
?> 