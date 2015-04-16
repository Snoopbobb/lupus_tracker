<?php namespace App\Http\Controllers;
use DB;
use App\Models\Log;
use Request;

class LogController extends Controller {

	public function index($user_id, $created_at){

		// $data = Log::getLog($user_id, $created_at);

		return view('log');

	}

	public function createLog($user_id, $date){

		$log = new Log();
		$log->user_id = $user_id;
		$log->log_date = $date;
		$log->flare = Request::input('flare');
		$log->fatigue = Request::input('fatigue');
		$log->headache = Request::input('headache');
		$log->swelling = Request::input('swelling');
		$log->rash = Request::input('rash');
		$log->joint_pain = Request::input('joint_pain');
		$log->sleep = Request::input('sleep');
		$log->excercise = Request::input('excercise');
		$log->notation = Request::input('notation');
		$log_id = $log->save();

		$log = new Log($log_id);

		return view('log', ['log' => $log]);
	}

	public function getData($user_id, $date){

		$data = Log::getLog($user_id, $date);
		
		$data = json_encode($data);

		return view('log', ['data' => $data]);

		//  Json encode

	}

}