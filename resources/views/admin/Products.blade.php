<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>

        @include("admin.admincss")

  </head>
  <body>
  <div class="container-scroller"> 

        @include("admin.navbar");
        
        <div style="position: relative; top: 60px; right: -150px">
            <form action="{{url('/uploadproducts')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div>
                    <label for="">Title</label>
                    <input style="color: blue;" type="text" name="title" placeholder="Write a title" required>
                </div>
                <div>
                    <label for="">Price</label>
                    <input style="color: blue;" type="number" name="price" placeholder="Write a price" required>
                </div>
                <div>
                    <label for="">Image</label>
                    <input style="color: blue;" type="file" name="image" required>
                </div>
                <div>
                    <label for="">Description</label>
                    <input style="color: blue;" type="text" name="description" placeholder="Description" required>
                </div>
                <div>
                    <input style="background-color: white;color: black" type="submit" value="Save">
                </div>


            </form>

            <div>
                <table bgcolor="black">
                    <tr>
                        <th style="padding: 30px;">Product Name</th>
                        <th style="padding: 30px;">Price</th>
                        <th style="padding: 30px;">Description</th>
                        <th style="padding: 30px;">Image</th>
                        <th style="padding: 30px;">Action</th>
                        <th style="padding: 30px;">Action 2</th>

                    </tr>

                    @foreach($data as $data)
                    <tr align="center">
                        <td>{{$data->Title}}</td>
                        <td>{{$data->Price}}</td>
                        <td>{{$data->Description}}</td>
                        <td><img height="200" width="200" src="/productsimage/{{$data->Image}}" alt=""></td>

                        <td><a href="{{url('/deleteproduct',$data->id)}}">Delete</a></td>

                        <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
                    </tr>

                    @endforeach

                </table>
            </div>


        </div>

        @include("admin.adminscript");

  </body>
</html>