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
            width: 130px;
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
    <h2>List of Students</h2>



    <table id="customers">
        <tr>
            <th scope="col">Student ID</th>
            <th scope="col">Last Name</th>
            <th scope="col">First Name</th>
            <th scope="col">Middle Name</th>
            <th scope="col">Year/Section</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col">Address</th>
        </tr>
        @if (count($students))
            @foreach ($students as $wisdom)
                <tr>
                    <td>{{$wisdom->school_id}}</td>
                    <td>{{ $wisdom->lastname }}</td>
                    <td>{{ $wisdom->firstname }}</td>
                    <td>{{ $wisdom->middlename }}</td>
                    <td>{{ $wisdom->year_section }}</td>
                    <td>{{ $wisdom->age }}</td>
                    <td>{{ $wisdom->gender }}</td>
                    <td>{{ $wisdom->address }}</td>
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
