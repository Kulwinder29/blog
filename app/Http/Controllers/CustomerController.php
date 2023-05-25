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

        echo $request->file('image')->storeAs('public/photos',$request->file('image')->getClientOriginalName());
        // p($request->all());
        // die;
        $customer = new customer;
        $customer->u_name = $request['name'];
        $customer->u_email = $request['email'];
        $customer->img = $request->file('image')->getClientOriginalName();
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
        $customer = Customer::all()->sortByDesc('u_id');
        $data = compact('customer');
        return view('select')->with($data);
    }

    public function trash()
    {
        // Select Trash Query
        $customer = Customer::onlyTrashed()->get();
        $data = compact('customer');
        return view('trash_user')->with($data);
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
        // Trash Query
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect('register/view');
    }

    public function forceDelete($id)
    {
        // forceDelete Query
        $customer = Customer::withTrashed()->find($id);
        if (!is_null($customer)) {
            $customer->forceDelete();
        }
        return redirect('register/view');
    }

    public function restore($id)
    {
        // Restore Query
        $customer = Customer::withTrashed()->find($id);
        if (!is_null($customer)) {
            $customer->restore();
        }
        return redirect('register/view');
    }

    public function edit($id)
    {
        // Edit
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
        // Update Query
        echo $request->file('image')->store('uploads');
        $customer = Customer::find($id);
        $customer->u_name = $request['name'];
        $customer->u_email = $request['email'];
        $customer->img = url('/storage/app/uploads') . "/" . $request->file('image')->getClientOriginalName();
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
