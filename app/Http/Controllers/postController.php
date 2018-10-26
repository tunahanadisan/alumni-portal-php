<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Validator;
use App\User;
use App\Model\Students;
use Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
class postController extends Controller
{
	public function register(Request $Request){
		//dc ve school id girmişmi diye kontrol ediyoruz
		if (!isset($Request->school_id) || !isset($Request->school_id)) {
			return Redirect::back()->withInput(Input::all())->withErrors(array('title' => 'Please enter Identity id and School id'));
		}
		//***

		//veritabanı kontrolü yapıyoruz email varmı yokmu 
		$Rdata = array('school_id' => $Request->school_id,'identify_id'=>$Request->identify_id);
		$where=['school_id' => $Request->school_id, 'identify_id' => $Request->identify_id];
		$count=Students::where($where)->count();
 	    //***

 	    //eğer countumuz yanı veritabanındaki veri ile eşleşirse kullanıcıya kayıt olma sayfasına yönlendiriyoruz
		if($count > 0){

			return view('auth.register_continue')->with('Rdata',$Rdata);
		}
		else{
			return Redirect::back()->withInput(Input::all())->withErrors(array('title' => 'Check your information. Does not match a record'));

		}
		//***


		//gelen değerlerin sayımı değilmi kontrolünü yapıyoruz
		if (!is_numeric($Request->identify_id) || !is_numeric($Request->school_id)) {
			return Redirect::back()->withInput(Input::all())->withErrors(array('title' => 'You should enter number '));

		}
		//***



	}

	public function registerControl(Request $request)
	{
		//eğer kullanıcı register sayfasından direk acarsa bu sayfayı dıye kontrol ediyoruz
		if(empty($request->identity_id) || empty($request->school_id)){
			return redirect()->route('register')->withErrors(['msg', 'The Message']);
		}//***
		$data = array('email' => $request->email );
		$count = User::where($data)->count();
		if($count>0){
			return Redirect::back()->withInput(Input::all())->withErrors(array('title' => 'This mail is used'));
		}


		$user = array(
			'mame' => $request->name,
			'sur_name' => $request->sur_name,
			'email' => $request->email,
			'birth_date' => $request->birth_date,
			'start_date' => $request->start_date,
			'graduated_date' => $request->graduated_date,
			'department' => $request->department,
			'country' => $request->country,
			'school_id' => $request->school_id,
			'identity_id' => $request->identity_id,
			'password' => $request->password,
		);
		$rules = array(
			'mame' => 'required',
			'sur_name' => 'required',
			'email' => 'required',
			'birth_date' => 'required',
			'start_date' => 'required',
			'graduated_date' => 'required',
			'department' => 'required',
			'country' => 'required',
			'school_id' => 'required',
			'identity_id' => 'required',
			'password' => 'required'
		);

                // HATA MESAJLARINI OLUŞTURALIM
		$messages = array(
			'mame' => 'required',
			'sur_name' => 'required',
			'email' => 'required',
			'birth_date' => 'required',
			'start_date' => 'required',
			'graduated_date' => 'required',
			'department' => 'required',
			'country' => 'required',
			'school_id' => 'required',
			'identity_id' => 'required',
			'password' => 'required'
		);

                // KONTROL (VALIDATION) İŞLEMİNİ GERÇEKLEŞTİRELİM
		$validator = Validator::make($user, $rules, $messages);
		if($validator->fails())
		{
			return Redirect::back()->withInput(Input::all())->withErrors(array('title' =>'Please fill in all fields'));
		}
		
		$validator = Validator::make($request->all(), ['password' => 'min:6']);
		if($validator->fails())
		{
			return Redirect::back()->withInput(Input::all())->withErrors(array('title' =>'Pasport should be minimum 6 character'));
		}
		$provier="";$provier_id="";
		User::create([
			'name' => $request->name,
			'sur_name' => $request->sur_name,
			'email' => $request->email,
			'birth_date' => $request->birth_date,
			'start_date' => $request->start_date,
			'graduated_date' => $request->graduated_date,
			'school_id' => $request->school_id,
			'identity_id' => $request->identity_id,
			'department' => $request->department,
			'country' => $request->country,
			'auth' => 3,
			'password' => Hash::make($request->password),
			'provider' => $provier,
			'provider_id' => $provier_id,
		]);

		return Redirect::to('login')->withErrors(array('title' => 'You can enter with your mail and password'));
		
	}

	public function a(Request $request){
		if($request->name==1){
			return redirect()->route('login');
		}
		return Redirect::back()->withInput(Input::all())->withErrors(['msg', 'The Message']);
	}
	
}
