@extends('layouts.app')
@section('content')
  <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">New Category</h1>
            <div class="col-xs-6">
							<div class="well">
							  <form id="loginForm" method="POST" action="{{URL::to('/admin/categories/create')}}" enctype="multipart/form-data">
						      <div class="form-group">
					          <label for="title" class="control-label">Title</label>
					          <input type="text" class="form-control" id="title" name="title" value="" required="">
					          <span class="help-block"></span>
						      </div>

						      <div class="form-group">
					          <label for="title" class="control-label">Parent ID</label>
					          <input type="number" class="form-control" id="parent_id" name="parent_id" value="" required="">
					          <span class="help-block"></span>
						      </div>


						      <div class="form-group">
					          <label for="title" class="control-label">Type</label>
					          <input type="text" class="form-control" id="type" name="type" value="" required="">
					          <span class="help-block"></span>
						      </div>

						      <div class="form-group">
					          <label for="title" class="control-label">Image</label>
					          <input type="file" class="form-control" id="image" name="image" value="" required="">
					          <span class="help-block"></span>
						      </div>


						      <div class="form-group">
					          <label for="title" class="control-label">Workout Type</label>
					          <input type="text" class="form-control" id="workout_type" name="workout_type" value="" required="">
					          <span class="help-block"></span>
						      </div>


						      <div class="form-group">
					          <label for="status" class="control-label">Status</label>
						        <input type="number" class="form-control" id="status" name="status" value="" required="">
						        <span class="help-block"></span>
						      </div>
						     
						      <button type="submit" class="btn btn-success btn-block">Login</button>
						      
						  </form>
						</div>
          </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
  </div>

@endsection