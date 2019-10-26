@extends('layouts.app')

@section('content')


<div class="container-fluid bg-primary text-black  py-4 " >
<center><strong><h3>View Complaint Status</h3>
Your complaint details</strong></center>
</div>

<div class="container">
	<table class="table table-responsive table-hover">
		<tr>
			<th>Complaint_no</th>
			<th>Name</th>
			<th>Student_id</th>
			<th>Categories</th>
			<th>Complaint-date</th>
			<th>Department</th>
			<th>Campus</th>
			<th>Uploded_file</th>
			<th>Action</th>
			<th>  </th>
			<th>  </th>

			
		</tr>
		@foreach($complaint_tbl as $complaint_tbl)
		@if($complaint_tbl->name  == Auth::user()->name)
		<tr>
			
			<td>{{ $complaint_tbl->id  }}</td>
			<td>{{ $complaint_tbl->name }}</td>
			<td>{{ $complaint_tbl->student_id }}</td>
			<td>{{ $complaint_tbl->categories }}</td>
			<td>{{ $complaint_tbl->complaint_date }}</td>
			<td>{{ $complaint_tbl->department }}</td>
			<td>{{ $complaint_tbl->campus }}</td>
			<td>{{ $complaint_tbl->uplode_file }}</td>
			<td> NotYet</td>
         
		</tr>
  @endif
	@endforeach

	</table>
	<button style="width:150px; height:50px; color:red;font-size: bold "><a href="{{route('admin.login')}}">Back</a></button>
	

</div>


@endsection