<!DOCTYPE html>
<html>
<head>
<style>



th{
  font-size: 13px;
}

tr{
  font-size: 13px;
}
h1{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 20px;
            text-align: center;
        }

        h2 {
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 15px;
            font-weight: 400;
        }

        .im img{
            border-radius: 50%;
            height: 100px;
            width: 100px;
            margin-left: 298px;
        }

        p{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 12px;
            text-align: center;
        }

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  font-size: 18px;
  text-align: center;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 8px;
  padding-bottom: 8px;
  text-align: left;
  background-color:rgb(173, 173, 173);
  color: white;
  text-align: center;


}
</style>
</head>

<body style="text-center">
  <div class="im">
    <img src="{{ public_path('images/image17.png') }}">
  </div>
  <h1>Pangangan National High School</h1>
  <p>Talisay, Calape, Bohol</p>
  <hr>
  <h2>Senior High School Advisers</h2>


 <table id="customers">
  <tr>

    <th>Adviser ID</th>
    <th>Profile Image</th>
    <th>Name</th>
    <th>Advisory</th>
    <th>Contact Number</th>
    <th>Email</th>
  </tr>
  @if(count($users))
  @foreach($users as $user)
  <tr>
    <td>{{$user->adviser_id}}</td>
    <td> <img src="{{'storage/users-avatar/' . $user->avatar}}" style="width: 30px; height: 30px; border-radius: 50%;"></td>
    <td>{{$user->name}}</td>
    <td>{{$user->advisory}}</td>
    <td>{{$user->contact_no}}</td>
    <td>{{$user->email}}</td>
  </tr>
  @endforeach
  @else
   <tr>
    <td colspan="3">No Advisers Found!</td>
   </tr>

  @endif
  
</table>

</body>
</html>


