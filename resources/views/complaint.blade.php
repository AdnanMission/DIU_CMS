<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.popper.min.js"></script>
</head>
<body style="background: linear-gradient(to right, #ada996, #c8dad9, #b4d2f2, #B2DFDB">
    <div class="container-fluid bg-primary text-black  py-4 " style="background: linear-gradient(45deg,#00897B,#0081bf);" >
<center><strong><h3>Daffodil International University</h3>
</strong><h4> Complaint Section</h4></center>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Drop your complaint') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('insert') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="Full_Name" class="col-md-4 col-form-label text-md-right">{{ __('Full_name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{Auth::user()->name}}"  required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                      
                      <div class="form-group row">
                            <label for="student_id" class="col-md-4 col-form-label text-md-right">{{ __('Student_id') }}</label>

                            <div class="col-md-6">
                                <input id="student_id" type="text" class="form-control @error('student_id') is-invalid @enderror" name="student_id" value="{{Auth::user()->student_id}}" required autocomplete="student_id" autofocus>

                                @error('student_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                      <div class="form-group row">
                            <label for="categories" class="col-md-4 col-form-label text-md-right">{{ __('Categories') }}</label>

                            <div class="col-md-6">
                                <select id="categories" type="text" class="form-control @error('categories') is-invalid @enderror" name="categories" value="{{ old('categories') }}" required autocomplete="categories" autofocus>
                                    <option>Academic</option>
                                   <!-- <option>-----Categories----</option>
                                    
                                    <option>Library</option>
                                    <option>Transport</option>
                                    <option>Canteen</option>
                                    <option>Accounts</option>
                                    <option>Hostel</option>-->

                                </select> 

                                @error('categories')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="complaint_date" class="col-md-4 col-form-label text-md-right">{{ __('Complaint_date') }}</label>
                            <div class="col-md-6">
                                <?php date_default_timezone_set('Asia/Dhaka'); ?>
                                <input id="complaint_date" type="date" class="form-control @error('complaint_date') is-invalid @enderror" name="complaint_date" value="<?php echo date('Y-m-d'); ?>" required autocomplete="complaint_date" autofocus>

                                @error('complaint_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                            <div class="col-md-6">
                                <select  id="department" type="text" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ old('department') }}" required autocomplete="department">
                                    <option>--Department--</option>
                                    <option>SWE</option>
                                    <option>CSE</option>
                                    <option>BBA</option>
                                    <option>Textile</option>
                                    <option>NAF</option>
                                    </select>

                                @error('department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="campus" class="col-md-4 col-form-label text-md-right">{{ __('Campus') }}</label>

                            <div class="col-md-6">
                                <select id="campus" type="text" class="form-control @error('campus') is-invalid @enderror" name="campus" required autocomplete="campus">
                               <option>--Campus--</option>
                               <option>Permanent</option>
                               <option>Main</option>
                               <option>Uttara</option>

                                </select>

                                @error('campus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description_of_complaint" class="col-md-4 col-form-label text-md-right">{{ __('Description_of_complaint') }}</label>

                            <div class="col-md-6">
                                <textarea id="description_of_complaint" type="text" class="form-control @error('description_of_complaint') is-invalid @enderror" name="description_of_complaint" required autocomplete="description_of_complaint" rows="5">
                               </textarea> 
                                @error('description_of_complaint')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                     
                      <div class="form-group row">
                            <label for="uplode_file" class="col-md-4 col-form-label text-md-right">{{ __('Uplode_file') }}</label>

                            <div class="col-md-6">
                                <input id="uplode_file" type="file" class="form-control @error('uplode_file') is-invalid @enderror" name="uplode_file" required autocomplete="uplode_file">

                                @error('uplode_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <input id="Action" type="text" class="form-control @error('Action') is-invalid @enderror" name="Action" value="Pending" hidden>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                          
                                <button type="Reset" class="btn btn-danger">
                                    {{ __('Reset') }}
                                </button>
                           
                        </div>


                        </div>
                        <br>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
