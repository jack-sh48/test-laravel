@extends('layouts.app')
@section('content')

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Categories</h1>
        <div class="container-flud">
					<div class="well">
						<a class="btn btn-primary" href="{{ URL::to('admin/categories/create') }}">Create a category</a>
						<div class="clearfix"></div>
						<table class="table table-striped table-condensed">
						<th>No.</th>
						<th>Title</th>
						<th>Parent</th>
						<th>Type</th>
						<th>Workout Type</th>
						<th>Status</th>
						<th>Created datetime</th>
						<th></th>
						<th></th>
						<th></th>
						@foreach($categories as $key => $category)
							<tr class="item{{$category->id}}">
								<td><?php echo $key+1 ; ?></td>
								<td>{{ $category->title }} </td>
								<td>{{ $category->parent_id }} </td>
								<td>{{ $category->type }} </td>
								<td>{{ $category->workout_type }} </td>
								<td>{{ $category->status }} </td>
								<td>{{ $category->created_datetime }} </td>
								<td><a href="{{ URL::to('admin/categories/' . $category->id) }}"> Show</a></td>
								<td><a href="{{ URL::to('admin/categories/' . $category->id . '/edit') }}"> Edit</a></td>
								<td>{{ Form::open(array('url' => 'admin/categories/'. $category->id)) }} 
								{{ Form::hidden('_method','DELETE') }}
								{{ Form::submit('Delete') }}
								{{ Form::close() }}
								</td>
							<tr>
						@endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection