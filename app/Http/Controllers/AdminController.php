<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\products;

use App\Models\Reservation;


class AdminController extends Controller
{
    public function users()
    {   
        $data= user::all();
        return view("admin.users", compact("data"));
    }

    public function deleteuser($id)
    {   
        $data= user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deleteproduct($id)
    {
        $data=products::find($id);

        $data->delete();

        return redirect()->back();
    }


    public function products()
    {   
        $data = products::all();
        return view("admin.Products",compact("data"));


    }

    public function updateview($id)
    {
        $data=products::find($id);
        return view("admin.updateview",compact("data"));

    }

    public function update(Request $request, $id)
    {
        $data=products::find($id);
 
        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('productsimage',$imagename);

            $data->Image= $imagename;

            $data->Title=$request->title;

            $data->Price=$request->price;

            $data->Description=$request->description;

            $data->save();

            return redirect()->back();

    }


    public function upload(Request $request)
    {   
        $data = new products;

        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('productsimage',$imagename);

            $data->Image= $imagename;

            $data->Title=$request->title;

            $data->Price=$request->price;

            $data->Description=$request->description;

            $data->save();

            return redirect()->back();

    }



    public function reservation(Request $request)
    {
        $data = new reservation;

            $data->name=$request->name;

            $data->email=$request->email;

            $data->phone=$request->phone;

            $data->message=$request->message;

            $data->save();

            return redirect()->back();

    }


    public function viewreservation()
    {
        $data=reservation::all();

        return view("admin.adminreservation",compact("data"));
    }


}


