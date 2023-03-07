<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <div style="margin-top: -30px;">
        <h1>PANGANGAN NATIONAL HIGH SCHOOL</h1>
        <h2>Guidance Office</h2>
        <h3>Talisay, Calape, Bohol</h3>
    </div>
    <div class="" style="margin-top: -30px;">
        <h1>COUNSELING ANECDOTAL RECORD <br><i style="font-weight: 400; font-size:10px;">(Confidential)</i></h1>
    </div>
    <hr>

    <div class="" style="margin-top: -10px;">
        <p style="font-size: 14px;">Student Name: <span
                style="border-bottom: 1px solid dimgray;">{{ $counseling_anecdotal_records->student->firstname }}
                {{ $counseling_anecdotal_records->student->middlename }}
                {{ $counseling_anecdotal_records->student->lastname }}</span> </p>
    </div>

    <div class="" style=" position:absolute; top: 180px;  text-align: end;">
        <p style="font-size: 14px">Gender: <span
                style="border-bottom: 1px solid dimgray;">{{ $counseling_anecdotal_records->student->gender }}</span>
        </p>
    </div>

    <div class="" style=" position:absolute; top: 205px;  text-align: end;">
        <p style="font-size: 14px">Date/Time Called: <span
                style="border-bottom: 1px solid dimgray;">{{ $counseling_anecdotal_records->date_time_called->format('F d,  Y - g:i A') }}</span>
        </p>
    </div>

    <div class="" style=" position:absolute; top: 230px;  text-align: end;">
        <p style="font-size: 14px">Reason/s for Contact: <span
                style="border-bottom: 1px solid dimgray;">{{ $counseling_anecdotal_records->reasons_for_contact }}</span>
        </p>
    </div>

    <div class="" style=" position:absolute; top: 155px;  margin-left: 400px; text-align: end;">
        <p style="font-size: 14px">Age: <span
                style="border-bottom: 1px solid dimgray;">{{ $counseling_anecdotal_records->student->age }}</span> </p>
    </div>

    <div class="" style=" position:absolute; top: 180px;  margin-left: 400px; text-align: end;">
        <p style="font-size: 14px">Year/Section: <span
                style="border-bottom: 1px solid dimgray;">{{ $counseling_anecdotal_records->student->year_section }}</span>
        </p>
    </div>

    <div class="" style=" position:absolute; top: 205px;  margin-left: 400px; text-align: end;">
        <p style="font-size: 14px">Referred By: <span
                style="border-bottom: 1px solid dimgray;">{{ $counseling_anecdotal_records->student->user->name }}</span>
        </p>
    </div>

    <div class="" style=" position:absolute; top: 230px;  margin-left: 400px; text-align: end;">
        <p style="font-size: 14px">Follow up Conseling Session: <span
                style="border-bottom: 1px solid dimgray;">{{ $counseling_anecdotal_records->follow_up_counseling_session }}</span>
        </p>
    </div>

    <div class="" style="">
        <p class="" style="font-size:14px; margin-top: 75px;">Reasons for Referral:
        <p
            style="text-indent:1cm; overflow-wrap: break-word; font-size: 13px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; ">
            {{ $counseling_anecdotal_records->reasons_for_referral }}</p>
        </p>

        <p class="" style="font-size:14px;">Information/Behavior Observed:
        <p
            style="text-indent:1cm; overflow-wrap: break-word; font-size: 13px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; ">
            {{ $counseling_anecdotal_records->behavior_observed }}</p>
        </p>

        <p class="" style="font-size:14px;">Interview Findings:
        <p
            style="text-indent:1cm; overflow-wrap: break-word; font-size: 13px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; ">
            {{ $counseling_anecdotal_records->interview_findings }}</p>
        </p>

        <p class="" style="font-size:14px;">Comments/Clinical Impressions:
        <p
            style="text-indent:1cm; overflow-wrap: break-word; font-size: 13px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; ">
            {{ $counseling_anecdotal_records->clinical_impressions }}</p>
        </p>

        <p class="" style="font-size:14px;">Recommendations:
        <p
            style="text-indent:1cm; overflow-wrap: break-word; font-size: 13px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; ">
            {{ $counseling_anecdotal_records->recommendation }}</p>
        </p>

    </div>
    <p
        style="font-size: 14px; font-weight: 400; margin-left: 5px; color:dimgray; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        Note: <i style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> Information revealed is held
            strictly CONFIDENTIAL.</i></p>

    <p style="margin-left: 355px; margin-top: 30px; border: 1px solid dimgray; width: 340px;"></p>
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
</style>
