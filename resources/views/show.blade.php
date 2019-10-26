@extends('layouts.app')

@section('content')

<div class="container">
	<table class="table">
		<tr>
			<th>Complaint_no</th>
			<th>Name</th>
			<th>Student_id</th>
			<th>Categories</th>
			<th>Complaint-date</th>
			<th>Department</th>
			<th>Campus</th>
			<th>complaint des</th>
			<th>Uploded_file</th>
			<th>Status</th>
			<th>Action</th>

			
		</tr>
		@php $i =0; @endphp
		@foreach($complaint_tbl as $complaint_tbl)
		@php $i++ @endphp
		<tr>
			@if( $complaint_tbl->name == Auth::user()->name)
			<td>{{ $i }}</td>
			<td>{{ $complaint_tbl->name }}</td>
			<td>{{ $complaint_tbl->student_id }}</td>
			<td>{{ $complaint_tbl->categories }}</td>
			<td>{{ $complaint_tbl->complaint_date }}</td>
			<td>{{ $complaint_tbl->department }}</td>
			<td>{{ $complaint_tbl->campus }}</td>
			<td>{{ $complaint_tbl->description_of_complaint }}</td>
            <td>{{ $complaint_tbl->uplode_file }}</td>
            <td>{{ $complaint_tbl->action }}</td>
            <!--<td>
				<a href="{{ route('edit',$complaint_tbl->id)}}" class="btn btn-success">Submit</a>-->
				<!--</td>
			<td>
				<a href="{{ route('edit',$complaint_tbl->id)}}" class="btn btn-success">Edit</a>
				<a href="{{ route('delete',$complaint_tbl->id)}}" class="btn btn-danger">Delete</a>-->
				<!--</td>-->
                 <td>
             
		    
				<form class=" form-inline" action="{{route('email',$complaint_tbl->id)}}" method="get">
					 @csrf
					<input type="submit" class="btn btn-success" value="Send">
				 
				</form>
			</td>
			
			<!--<td>
				<a href="{{ route('send',$complaint_tbl->id)}}" class="btn btn-success">Submit</a>
			</td>-->

			@endif
		</tr>

	@endforeach

	</table>
	

</div>
<div style="text-align: center; "><button style="width:150px; height:50px; color:red; "><strong><a href="{{route('login')}}">Back</a></button></strong> </div>


@endsection