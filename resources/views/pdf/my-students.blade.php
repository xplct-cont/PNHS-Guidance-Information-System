<!DOCTYPE html>
<html>

<head>
    <style>
        th {
            font-size: 12px;
        }

        tr {
            font-size: 12px;
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

        img{
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

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

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

    <img src="{{ public_path('images/image17.png') }}">
    <h1>Pangangan National High School</h1>
    <p>Talisay, Calape, Bohol</p>
    <hr>
    <h2>List of Students in {{Auth::user()->advisory}}</h2>

    <table id="customers">
        <tr>
            <th scope="col">Last Name</th>
            <th scope="col">First Name</th>
            <th scope="col">Middle Name</th>
            <th scope="col">Year/Section</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col">Address</th>
        </tr>
        @if (count($students))
            @foreach ($students as $myStudents)
                <tr>
                    <td>{{ $myStudents->lastname }}</td>
                    <td>{{ $myStudents->firstname }}</td>
                    <td>{{ $myStudents->middlename }}</td>
                    <td>{{ $myStudents->year_section }}</td>
                    <td>{{ $myStudents->age }}</td>
                    <td>{{ $myStudents->gender }}</td>
                    <td>{{ $myStudents->address }}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="3">No Students Found!</td>
            </tr>

        @endif

    </table>

</body>

</html>
