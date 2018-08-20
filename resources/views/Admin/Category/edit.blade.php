@extends('layouts.app')
@section('content')
{{ Html::ul($errors->all()) }}

  <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Edit Category</h1>
            <div class="col-xs-6">
							<div class="well">
							 
						{{ Form::model('$category',array('route' => array('categories.update' , $category->id), 'method'=>'PUT' )) }}

						    <div class="form-group">
						        {{ Form::label('title', 'Title', array('class' => 'control-label'))}}
						        {{ Form::text('title', $category->title , array('class' => 'form-control')) }}
						    </div>
						    <span class="help-block"></span>

						    <div class="form-group">
						        {{ Form::label('parent_id', 'Parent ID', array('class' => 'control-label'))}}
						        {{ Form::text('parent_id', $category->parent_id , array('class' => 'form-control')) }}
						    </div>
						    <span class="help-block"></span>
						    <div class="form-group">
						        {{ Form::label('type', 'Type', array('class' => 'control-label'))}}
						        {{ Form::text('type', $category->type , array('class' => 'form-control')) }}
						    </div>
						    <span class="help-block"></span>
						    <div class="form-group">
						        {{ Form::label('workout_type', 'WorkOut Type', array('class' => 'control-label'))}}
						        {{ Form::text('workout_type', $category->workout_type , array('class' => 'form-control')) }}
						    </div>
						    <span class="help-block"></span>

						    <div class="form-group">
						        {{ Form::label('status', 'Status', array('class' => 'control-label'))}}
						        {{ Form::text('status', $category->status , array('class' => 'form-control')) }}
						    </div>
						    <span class="help-block"></span>

						    {{ Form::submit('Update the User!', array('class' => 'btn btn-primary')) }}

						{{ Form::close() }}
						</div>
          </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
  </div>

@endsection