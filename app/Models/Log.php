<?php
namespace App\Models;

use DB;
use App\Library\Sql;

class Log extends Model {
    protected static $table = 'logs';
    protected static $key = 'log_id';

    public static function getLog($user_id, $date){

    	$sql = "Select * from logs
				Where user_id = :user_id
				and log_date = :date" ;

		$data = DB::select($sql, array('user_id' => $user_id, 'date' => $date));
		
		return $data;

    }
}