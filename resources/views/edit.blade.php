@extends('layouts.app')

@section('content')
<div class="container-fluid bg-primary text-black  py-4 " style="margin: auto;">
<center><strong><h3> Complaint and Grivance Section</h3>
Daffodil International University</strong></center>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Drop your complaint') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update', $complaint_tbl->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="Full_Name" class="col-md-4 col-form-label text-md-right">{{ __('Full_name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $complaint_tbl->name }}" required autocomplete="name" autofocus>

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
                                <input id="student_id" type="text" class="form-control @error('student_id') is-invalid @enderror" name="student_id" value="{{ $complaint_tbl->student_id}}" required autocomplete="student_id" autofocus>

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
                                <select id="categories" type="text" class="form-control @error('categories') is-invalid @enderror" name="categories" value="{{ $complaint_tbl->categories }}" required autocomplete="categories" autofocus>
                                    <option>Academic</option>
                                	<!--<option>-----Categories----</option>
                                	
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
                                <input id="complaint_date" type="date" class="form-control @error('complaint_date') is-invalid @enderror" name="complaint_date" value="{{ $complaint_tbl->complaint_date  }}" required autocomplete="complaint_date" autofocus>

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
                                <select  id="department" type="text" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ $complaint_tbl->department  }}" required autocomplete="department">
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
                                <select id="campus" type="text" class="form-control @error('campus') is-invalid @enderror" name="campus" value="{{ $complaint_tbl->campus}}" required autocomplete="campus">
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
                                <textarea id="description_of_complaint" type="text" class="form-control @error('description_of_complaint') is-invalid @enderror" name="description_of_complaint" required autocomplete="description_of_complaint" rows="5">{{ $complaint_tbl->description_of_complaint}}
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
                                <input id="uplode_file" type="file" class="form-control @error('uplode_file') is-invalid @enderror" name="uplode_file"  value="{{ $complaint_tbl->uplode_file  }}" required autocomplete="uplode_file">

                                @error('uplode_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection