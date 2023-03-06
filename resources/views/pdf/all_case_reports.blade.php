<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <style>
        th {
            font-size: 12px;
        }

        tr {
            font-size: 12px;
        }

        h2 {
            text-align: center;
            font-size: 13px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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


<body style="text-center">

    <img src="{{ public_path('images/image17.png') }}">
    <h1>Pangangan National High School</h1>
    <p>Talisay, Calape, Bohol</p>
    <hr>
    <h2>REPORT OF CASES OF ABUSE, VIOLENCE, EXPLOITATION, DISCRIMINATION, BULLYING OR PEER ABUSE AND OTHER RELATED OFFENSES</h2>
    <table id="customers">

        <tr>
            <th>Name of Victim</th>
            <th>Grade & Section</th>
            <th>Sex</th>
            <th>Date Reported</th>
            <th>Name of Respondents</th>
            <th>Grade & Section</th>
            <th>Sex</th>
            <th>Nature of Complaint</th>
        </tr>
        @if (count($case_reports))
            @foreach ($case_reports as $reports)
                <tr>
                    <td>{{ $reports->victim_name }}</td>
                    <td>{{ $reports->grade_section }}</td>
                    <td>{{ $reports->sex }}</td>
                    <td>{{ Carbon\Carbon::parse($reports->date_reported)->format('F d,  Y ') }}</td>
                    <td>{{ $reports->resp_name }}</td>
                    <td>{{ $reports->resp_grade_section }}</td>
                    <td>{{ $reports->resp_sex }}</td>
                    <td>{{ $reports->nature_of_complaint }}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="3">No Reported Cases Found!</td>
            </tr>

        @endif

    </table>

</body>

</html>
