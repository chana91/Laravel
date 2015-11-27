<?php namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Hotel;
use Input;
use Request;
use DB;
class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
//        $cities=new City();
//        $city=$cities->all();
//        print_r($city);

        $cities=City::lists('city','id');


		return view('welcome',array('cities'=>$cities));
	}


    public function test()
    {
        if(Request::ajax()) {
            $data = Input::all();
            $name=$data['hotelName'];
            $address=$data['address'];
            $city=$data['city'];

            $hotelModel=new Hotel();
            $hotelModel->name=$name;
            $hotelModel->address=$address;
            $hotelModel->cityId=$city;
            $hotelModel->save();
            return response(array('msg'=>'success'))->header('Content-Type','application/json');
        }
    }

    public  function viewHotels()
    {
        return view('hotels');
    }


    public function searchHotels()
    {
        if(Request::ajax()) {
        $data = Input::all();
        $city=$data['hotelName'];
        $city=City::where('city','=',$city)->pluck('id');


            $cities=DB::table('hotel')->orderBy('name','asc')->where('cityId','=',$city)->get();
           // $hotels=Hotel::where('cityId','=',$city)->pluck('name');
            $val=json_encode($cities);
            return response(array('msg'=> $val))->header('Content-Type','application/json');

        }
    }
     public function display()
     {
         return view('display');
     }

}
