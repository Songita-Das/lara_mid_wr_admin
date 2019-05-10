@extends('admin.layouts.default')
@section('content')

<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Student Add</li>
        </ol>
        <div class="card">
        	<div class="col-md-12">
        		<form action="" method="post">
        			
        			{{csrf_field() }}
        			<div class="form-group">
        				<label for="">Name</label>
        			<input type="text"class="form-control" name="name">
        			</div>
        			
        			<div class="form-group">
        				<label for="">Email</label>
        			<input type="email"class="form-control" name="email">
        			</div>
        			<div class="form-group">
        				<label for="">Salary</label>
        			<input type="number"class="form-control" name="salary">
        			</div>
        			<div class="form-group">
        				<label for="">Date of birth</label>
        			<input type="date"class="form-control" name="date_of_birth">
                       </div>

                       <div class="form-group">
        		         <button type="text" class="btn btn-primary">Submit</button>
        			</div>
        		</form>
        		
        	</div>
        	
        </div>
    </div>
@stop