<? php
namespace App\Models;
use DB;
use App\Library\Sql;

class Log extends Model {
    protected static $table = 'user';
    protected static $key = 'user_id';
}