<?php

namespace App\Http\Controllers;

use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
  public function index()
  {
    $customer = Customer::all();
    $url = url('register');
    $title = 'Registration';
    $data = compact('customer', 'url', 'title');
    return view('form')->with($data);
  }

  public function store(Request $request)
  {
    // Insert Query

    $customer = new customer;
    $customer->u_name = $request['name'];
    $customer->u_email = $request['email'];
    $customer->gender = $request['gender'];
    $customer->address = $request['address'];
    $customer->country = $request['country'];
    $customer->state = $request['state'];
    $customer->dob = $request['dob'];
    $customer->password = md5($request['password']);
    $customer->save();
    return redirect('register/view');
  }

  public function view()
  {
    // Select Query 
    $customer = Customer::all();
    // echo '<pre>';
    // print_r($customer);
    // die;
    // print("hello")
    $data = compact('customer');
    return view('select')->with($data);
  }

  public function show($id)
  {
    // Select Query 
    $customer = Customer::find($id);
    // echo '<pre>';
    // print_r($customer);
    // die;
    $data = compact('customer');
    return view('show_user')->with($data);
  }

  public function delete($id)
  {
    // Delete Query
    $customer = Customer::find($id);
    if (!is_null($customer)) {
      $customer->delete();
    }
    return redirect('register/view');
  }

  public function edit($id)
  {
    // Update Query
    $customer = Customer::find($id);
    if (!is_null($customer)) {
      $url = url('customer/update') . '/' . $id;
      $title = 'Update User';
      $data = compact('customer', 'url', 'title');
      return view('form')->with($data);
    } else {
      return redirect('register/view');
    }
  }

  public function update($id, Request $request)
  {
    $customer = Customer::find($id);
    $customer->u_name = $request['name'];
    $customer->u_email = $request['email'];
    $customer->gender = $request['gender'];
    $customer->address = $request['address'];
    $customer->country = $request['country'];
    $customer->state = $request['state'];
    $customer->dob = $request['dob'];
    $customer->password = md5($request['password']);
    $customer->save();
    return redirect('register/view');
  }
}
