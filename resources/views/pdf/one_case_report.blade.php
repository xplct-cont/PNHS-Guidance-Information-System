<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="container">
    <img src="{{ public_path('images/image17.png') }}" style="width: 130px; height: 100px; border-radius: 50%;">
    <div style="margin-top: -120px;">
        <h1>PANGANGAN NATIONAL HIGH SCHOOL</h1>
        <h2>Guidance Office</h2>
        <h3>Talisay, Calape, Bohol</h3>
    </div>
    <div class="rep">
        <h1>REPORT OF CASES OF ABUSE, VIOLENCE, EXPLOITATION, DISCRIMINATION, BULLYING OR PEER ABUSE AND OTHER RELATED OFFENSES</h1>
    </div>
    <hr>

    <div class="">
        <p style="font-size: 14px;">Victim Name: <span
                style="border-bottom: 1px solid dimgray;">{{ $one_case_report->victim_name}}</span></p>
    </div>
    <div class="" >
        <p style="font-size: 14px;">Grade and Section: <span
                style="border-bottom: 1px solid dimgray;">{{ $one_case_report->grade_section}}</span> </p>
    </div>
    <div class="">
        <p style="font-size: 14px;">Sex: <span
                style="border-bottom: 1px solid dimgray;">{{ $one_case_report->sex}}</span> </p>
    </div>
    <div class="">
        <p style="font-size: 14px;">Date Reported: <span
                style="border-bottom: 1px solid dimgray;">{{ Carbon\Carbon::parse($one_case_report->date_reported)->format('F d,  Y ') }}</span> </p>
    </div>

    <div class="" style=" position:absolute; top: 206px;  margin-left: 400px; text-align: end;">
        <p style="font-size: 14px">Respondent Name: <span
                style="border-bottom: 1px solid dimgray;">{{ $one_case_report->resp_name }}</span> </p>
    </div>

    <div class="" style=" position:absolute; top: 250px;  margin-left: 400px; text-align: end;">
        <p style="font-size: 14px;">Grade and Section: <span
                style="border-bottom: 1px solid dimgray;">{{ $one_case_report->resp_grade_section }}</span> </p>
    </div>

    <div class="" style=" position:absolute; top: 294px;  margin-left: 400px; text-align: end;">
        <p style="font-size: 14px;">Sex: <span
                style="border-bottom: 1px solid dimgray;">{{ $one_case_report->resp_sex }}</span> </p>
    </div>
    <div class="" style=" position:absolute; top: 338px;  margin-left: 400px; text-align: end;">
        <p style="font-size: 14px;">Nature of Complaint: <span
                style="border-bottom: 1px solid dimgray;">{{ $one_case_report->nature_of_complaint }}</span> </p>
    </div>
    <div class="" style="">

        <p class="" style="font-size:14px;">Actions Taken: </p>
        <textarea
            style="margin-top: -10px; height: 100px; font-size: 12px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">{{ $one_case_report->actions_taken }}</textarea>

        <p class="" style="font-size:14px;">Recommendations: </p>
        <textarea
            style="margin-top: -10px; height: 100px; font-size: 12px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">{{ $one_case_report->recommendations }}</textarea>

    </div>

    <p
        style="font-size: 14px; font-weight: 400; margin-left: 5px; color:dimgray; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        Note: <i style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> Information revealed is held
            strictly CONFIDENTIAL.</i></p>

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

    .rep h1{
      
        font-size: 12px;
    }
</style>
