<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function customer() {
        $sql = "select * from customers";
		$result = DB::select($sql);
		return view('customers/customer')->with('data', $result);
    }
    function add_customer(){
        return view('/customers/add_customer');
    }

    function view_customer($id = null){
        $customer = Customer::findOrFail($id);
        return view('customers/view_customer',['customer'=>$customer]);
    }

    function update_customer($id=null){
        $customer = Customer::findOrFail($id);
        return view('customers/update_customer')->with('customer',$customer);
    }

    function delete_customer($id = null){
        Customer::destroy($id);
        return redirect()->back();
    }

    function save_customer(Request $request, $id = null){
        $rules = [
            'customername' => ['required','max:255'],
            'gender'       => ['required','numeric','min:0','max:999999999999'],
            'cmnd'         => ['required','max:255'],
            'adddress'     => ['required','max:255'],
            'phonenumber'  => ['required','numeric','min:0','max:9999999999'],
            'note'         => ['required','max:255'],
            'matour'       => ['required','max:255'],
        ];
        $fields = [
            'customername' => "Name",
            'gender'       => 'Gender',
            'cmnd'         => 'CMND/CCCD',
            'adddress'     => 'Address',
            'phonenumber'  =>  'Phone number',
            'note'         => 'Note',
            'matour'       => 'Matour'
        ];
        $data = $request->all();// lấy dữ liệu nhận được từ request

		$validator = Validator::make($data, $rules, [], $fields);

		$validator->validate();	// gọi hàm xác thực dữ liệu

		try {
			unset($data["_token"]);// loại bỏ giá trị _token từ request
			$customer =Customer::updateOrCreate(['id' => $id], $data);
			return redirect()
				->route('customer')
				->with('success_mesg', 'Thêm dữ liệu thành công');
		} catch (Exception $ex) {
			return redirect()
				->route('customer')
				->with('error_mesg', 'Thêm dữ liệu thất bại (Chi tiết: ' . $ex->getMessage() . ')');
		}
	}
    

}
