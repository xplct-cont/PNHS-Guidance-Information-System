@extends('layouts.layoutsidebar')

@section('content')
@if ($message = Session::get('status'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
    <div class="d-flex justify-content-center">
        <img src="/images/image17.png" class="user-image img-circle elevation-2 " alt="User Image"
            style="width: 120px; height:120px; border-radius: 50%; background-color: #5bc0de; padding-left: 2px; padding-right:2px; padding-bottom:2px; padding-top: 2px;">
    </div>

    <h1 class="text-center mt-4"
        style=" color:whitesmoke; margin:auto; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 22px; color:rgba(60, 58, 58, 0.904);">
        Pangangan National High School </h1>
    <p class="text-center" style="font-weight:bold; font-size: 20px; color:rgba(60, 58, 58, 0.904);">Guidance
        Office</p>
    <p class="text-center text-dark" style="position: relative; top: -15px;">Talisay, Calape, Bohol</p>


    <p class="text-center text-dark" style="font-size: 15px; font-weight: 500; color:rgba(60, 58, 58, 0.904); ">
        REPORT OF CASES OF ABUSE, VIOLENCE, EXPLOITATION, DISCRIMINATION, BULLYING OR PEER ABUSE AND OTHER RELATED OFFENSES
    </p>
    <hr>

    <div class="d-flex justify-content-end">
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
<span class="fas fa-plus-circle"></span> New Case
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-xl" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title text-secondary" style="font-weight:400" id="exampleModalLabel">Create new case...</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        <form action="{{ url('/create_case_report') }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="container mx-auto">

            <div class="d-flex justify-content-center">
                <img src="/images/image17.png" class="user-image img-circle elevation-2 " alt="User Image"
                    style="width: 120px; height:120px; border-radius: 50%; background-color: #5bc0de; padding-left: 2px; padding-right:2px; padding-bottom:2px; padding-top: 2px;">
            </div>
        
            <h1 class="text-center mt-4"
                style=" color:whitesmoke; margin:auto; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 22px; color:rgba(60, 58, 58, 0.904);">
                Pangangan National High School </h1>
            <p class="text-center" style="font-weight:bold; font-size: 20px; color:rgba(60, 58, 58, 0.904);">Guidance
                Office</p>
            <p class="text-center text-dark" style="position: relative; top: -15px;">Talisay, Calape, Bohol</p>
        
        
            <p class="text-center text-dark" style="font-size: 15px; font-weight: 500; color:rgba(60, 58, 58, 0.904); ">
                REPORT OF CASES OF ABUSE, VIOLENCE, EXPLOITATION, DISCRIMINATION, BULLYING OR PEER ABUSE AND OTHER RELATED OFFENSES
            </p>
            <hr>

            <div class="row mt-1">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" style="color:dimgray">Victim Name:</label>
                        <input type="text" class="form-control" name="victim_name">
                    </div>
                    <div class="form-group">
                        <label for="" style="color:dimgray">Grade & Section:</label>
                        <input type="text" class="form-control" name="grade_section">
                    </div>
                    <div class="form-group">
                        <label for="" style="color:dimgray">Sex:</label>
                        <input type="text" class="form-control" name="sex">
                    </div>
                    <div class="form-group">
                        <label for="" style="color:dimgray">Date Reported:</label>
                        <input type="date" class="form-control" name="date_reported">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" style="color:dimgray">Name of Respondents:</label>
                        <input type="text" class="form-control" name="resp_name">
                    </div>
                    <div class="form-group">
                        <label for="" style="color:dimgray">Grade & Section:</label>
                        <input type="text" class="form-control" name="resp_grade_section">
                    </div>
                    <div class="form-group">
                        <label for="" style="color:dimgray">Sex:</label>
                        <input type="text" class="form-control" name="resp_sex">
                    </div>
                    <div class="form-group">
                        <label for="" style="color:dimgray">Nature of Complaint:</label>
                        <input type="text" class="form-control" name="nature_of_complaint">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="" style="color:dimgray">Actions Taken</label>
                        <textarea id="" type="text" class="form-control" title="" rows="5" required
                            name="actions_taken" placeholder="Write the actions taken"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" style="color:dimgray">Recommendations</label>
                        <textarea id="" type="text" class="form-control" title="" rows="5" required
                            name="recommendations" placeholder="Write the recommendations"></textarea>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" style="color:dimgray">Admin ID:</label>
                        <input type="text" style="width: 45px;" class="form-control text-center" name="user_id" value="{{Auth::user()->id}}" readonly>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary"><span class="fas fa-save"></span> Save changes</button>
          </div>
        </form>
    </div>
   
  </div>
</div>
</div>
    </div>

    <a class="btn btn-secondary ml-2 mr-2" style=""
    href="{{ route('export_allCases_pdf') }}"><span class="text-danger fas fa-file-pdf"
        style="font-size: 15px;"></span> PDF</a>

     <p class="text-dark p-2">Guidance Designate: <span class="text-dark" style="border-bottom: 1px solid dimgray">{{Auth::user()->name}}</span></p>
    <div class="mt-4 elevation-1 p-2">

  

        <div class="card">
            <table class="table table-sm text-center">
                <thead class="text-light p-2" style="background-color:rgb(173, 173, 173);">
                    <tr>
                        <th>Name of Victim</th>
                        <th class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                            style="text-align: center">Grade & Section</th>
                        <th class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                            style="text-align: center">Sex</th>
                        <th>Date Reported</th>
                        <th class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                            style="text-align: center">Name of Respondents</th>
                        <th class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                            style="text-align: center">Grade & Section</th>
                        <th class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                            style="text-align: center">Sex</th>
                        <th class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                            style="text-align: center">Nature of Complaint</th>
                        <th class="text-center">Show</th>
                        <th class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                            style="text-align: center">Delete</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($case_reports as $reports)
                        <tr class="text-secondary">
                            <td>{{ $reports->victim_name }}</td>
                            <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                style="text-align: center">{{ $reports->grade_section }}</td>
                            <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                style="text-align: center">{{ $reports->sex }}</td>
                            <td>{{ Carbon\Carbon::parse($reports->date_reported)->format('F d,  Y ') }}</td>
                            <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                style="text-align: center">{{ $reports->resp_name }}</td>
                            <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                style="text-align: center">{{ $reports->resp_grade_section }}</td>
                            <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                style="text-align: center">{{ $reports->resp_sex }}</td>
                            <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                style="text-align: center">{{ $reports->nature_of_complaint }}</td>
                            <td><a href="{{ url('show_case_report/'.$reports->id) }}"
                                class="btn btn-xs "><i class="fas fa-eye text-success"></i></a></td>
                            <td  class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                 style="text-align: center"><a href="{{ url('delete_case_report/' . $reports->id) }}"
                                class="btn btn-xs "><i class="text-danger fas fa-trash-alt"></i></a></td>
                         
                            </tr>
                    
                    @empty
                        <tr>
                            <td colspan="5" class="text-dark"><span class="fas fa-exclamation-circle text-danger"></span>
                                No Reported Cases Found!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
