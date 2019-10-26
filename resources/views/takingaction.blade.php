@extends('layouts.app')

@section('content')
<div class="container-fluid bg-primary text-black  py-4 " >
<center><strong><h3> Complaint and Grivance Section</h3>
Daffodil International University</strong></center>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Drop your complaint') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update1', $complaint_tbl->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="Full_Name" class="col-md-4 col-form-label text-md-right">{{ __('Full_name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value=" {{ $complaint_tbl->name }}" required autocomplete="name" autofocus readonly>

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
                                <input id="student_id" type="text" class="form-control @error('student_id') is-invalid @enderror" name="student_id" value="{{ $complaint_tbl->student_id}}" required autocomplete="student_id" autofocus readonly>

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
                                <input id="categories" type="text" class="form-control @error('categories') is-invalid @enderror" name="categories" value="{{ $complaint_tbl->categories }}" readonly>

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
                                <input id="complaint_date" type="date" class="form-control @error('complaint_date') is-invalid @enderror" name="complaint_date" value="{{ $complaint_tbl->complaint_date  }}" required autocomplete="complaint_date" autofocus readonly>

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
                                    <input id="department" type="text" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ $complaint_tbl->department  }}" required autocomplete="department" readonly >

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
                                <input id="campus" type="text" class="form-control @error('campus') is-invalid @enderror" name="campus" value="{{ $complaint_tbl->campus}}" required autocomplete="campus" readonly>

                                @error('campus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         

                        <div class="form-group row">
                            <label for="uplode_file" class="col-md-4 col-form-label text-md-right">{{ __('Uplode_file') }}</label>

                            <div class="col-md-6">
                                <input id="uplode_file" class="form-control @error('uplode_file') is-invalid @enderror" name="uplode_file"  value="{{ $complaint_tbl->uplode_file  }}" required autocomplete="uplode_file" readonly="">

                                @error('uplode_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description_of_complaint" class="col-md-4 col-form-label text-md-right">{{ __('Description_of_complaint') }}</label>

                            <div class="col-md-6">
                                <textarea id="description_of_complaint" type="text" class="form-control @error('description_of_complaint') is-invalid @enderror" name="description_of_complaint" required autocomplete="description_of_complaint" rows="5" readonly>{{ $complaint_tbl->description_of_complaint}}
                               </textarea> 
                                @error('description_of_complaint')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                      <div class="form-group row">
                            <label for="campus" class="col-md-4 col-form-label text-md-right">{{ __('Action') }}</label>

                            <div class="col-md-6">
                                <select id="Action" type="text" class="form-control @error('Action') is-invalid @enderror" name="Action" value="{{ $complaint_tbl->Action}}" required autocomplete="Action">
                                <option>--Action--</option>
                               <option value="In-processing">In-processing</option>
                    		   <option value="Not valuable">Not valuable</option>
                               <option value="Closed">Closed</option>

                                </select>

                                @error('Action')
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