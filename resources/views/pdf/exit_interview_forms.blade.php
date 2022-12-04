<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="container">
        <img src="{{ public_path('images/image17.png') }}" style="width: 100px; height: 100px; border-radius: 50%;">
        <div style="margin-top: -120px;">
            <h1>PANGANGAN NATIONAL HIGH SCHOOL</h1>
            <h2>Guidance Office</h2>
            <h3>Talisay, Calape, Bohol</h3>
        </div>
        <div class="rep">
            <h1>Exit Interview Form <br>
                (Intended for students leaving in the institution)</h1>
        </div>
        <hr>

        <div class="">
            <p style="font-size: 14px;">Date: <span
                    style="border-bottom: 1px solid dimgray;">{{ Carbon\Carbon::parse($exit_interview_forms->date)->format('F d,  Y ') }}</span>
            </p>
        </div>
        <div class="">
            <p style="font-size: 14px;">Student Name: <span
                    style="border-bottom: 1px solid dimgray;">{{ $exit_interview_forms->name }}</span> </p>
        </div>

        <div class="" style=" position:absolute; top: 200px;  margin-left: 400px; text-align: end;">
            <p style="font-size: 14px">School Year: <span
                    style="border-bottom: 1px solid dimgray;">{{ $exit_interview_forms->school_year }}</span> </p>
        </div>

        <div class="" style=" position:absolute; top: 245px;  margin-left: 400px; text-align: end;">
            <p style="font-size: 14px;">Year Level and Section: <span
                    style="border-bottom: 1px solid dimgray;">{{ $exit_interview_forms->year_section }}</span> </p>
        </div>

        <div class="">
            <p style="font-size: 14px;">Reason for leaving the school: <span
                    style="border-bottom: 1px solid dimgray;">{{ $exit_interview_forms->reasons_for_leaving }}</span>
            </p>
        </div>
        <div class="">
            <p style="font-size: 14px;">Other reason for leaving the school: <span
                    style="border-bottom: 1px solid dimgray;">{{ $exit_interview_forms->others }}</span> </p>
        </div>
        <div class="">
            <p style="font-size: 14px;">Reason for transfer: <span
                    style="border-bottom: 1px solid dimgray;">{{ $exit_interview_forms->reasons_for_transfer }}</span>
            </p>
        </div>
        <div class="" style=" position:relative; top: 130px;">
            <p style="font-size: 14px;">Date: <span
                    style="border-bottom: 1px solid dimgray;">{{ Carbon\Carbon::parse($exit_interview_forms->date_2)->format('F d,  Y ') }}</span>
            </p>
        </div>
        <br><br><br><br>



        <p style="margin-left: 355px; margin-top: 70px; border: 1px solid dimgray; width: 340px;"></p>
        <p
            style=" font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; position:relative; font-size: 14px; font-weight: 400; margin-left: 355px; margin-top: -10px;">
            Designated Guidance Counselor’s Name and Signature</p>


</body>

</html>


<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    h1 {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 16px;
        margin-top: 50px;
        text-align: center;

    }

    h2 {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 14px;
        margin-top: -5px;
        text-align: center;

    }

    h3 {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 12px;
        font-weight: 400;
        margin-top: -5px;
        text-align: center;

    }

    .rep h1 {

        font-size: 12px;
    }
</style>
