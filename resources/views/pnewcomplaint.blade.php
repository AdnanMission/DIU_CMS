@extends('admin.layouts.master')
@section('content')
<br>
<div>
    <br>
    <h2 class="bg-info " style="text-align:center" >View New Complaint</h2>


</div>
<div class="container" >
	<table  cellspacing="0" cellpadding="0" class="table table-responsive table-hover" style="max-width:1400px; max-height: 450px; font-size:14px; ">
		<tr>
			<th>C_no</th>
			<th>Name</th>
			<th>Student_id</th>
			<th>Categories</th>
			<th>Complaint-date</th>
			<th>Department</th>
			<th>Campus</th>
			<th>complaint des</th>
			<th>Uploded_file</th>
			<th>Action</th>
			<th>Status</th>
			

			
		</tr>
		@php $i =0; @endphp
		@foreach($complaint_tbl as $complaint_tbl)
		@php $i++ @endphp
		<tr>
			@if($complaint_tbl->action == "Pending")
			<td>{{ $i }}</td>
			<td>{{ $complaint_tbl->name }}</td>
			<td>{{ $complaint_tbl->student_id }}</td>
			<td>{{ $complaint_tbl->categories }}</td>
			<td>{{ $complaint_tbl->complaint_date }}</td>
			<td>{{ $complaint_tbl->department }}</td>
			<td>{{ $complaint_tbl->campus }}</td>
			<td>{{ $complaint_tbl->description_of_complaint }}</td>
            <td>{{ $complaint_tbl->uplode_file }}</td>
            <td>{{$complaint_tbl->action}}</td>
			<td>
				<a href="{{ route('edit1',$complaint_tbl->id)}}" class="btn btn-success">Action</a>
				<!--<a href="{{ route('delete',$complaint_tbl->id)}}" class="btn btn-danger">Delete</a>-->
				</td>
                 <td>
                 
		<!--<form class=" form-inline" action="{{route('delete',$complaint_tbl->id)}}" method="POST">
					 @csrf
					<input type="submit" class="btn btn-danger" value="Delete">
				</form>-->
				
			</td>
			
			<!--<td>
				<a href="{{ route('send',$complaint_tbl->id)}}" class="btn btn-success">Submit</a>
			</td>-->
		</tr>
@endif
	@endforeach

	</table>
	

</div>
</div>


@endsection

