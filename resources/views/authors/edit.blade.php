@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
					<div class="panel-heading">Edit Author</div>

						<div class="panel-body">
							@if ($errors->count() > 0)
								<ul>
									@foreach($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							@endif
							<form action="{{ route('authors.update', $author->id) }}" method="post">
								<input type="hidden" name="_method" value="PUT">
								{{ csrf_field() }}
								Name:
								<br />
								<input type="text" name="first_name" value="{{ $author->first_name }}" />
								<br /><br />
								Description:
								<br />
								<input type="text" name="last_name" value="{{ $author->last_name }}" />
								<br /><br />
								<input type="submit" value="Submit" class="btn btn-default" />
							</form>
							
							<h> Models List </h>
							<table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Photo</th>
									<th>Engine</th>
									<th>Max Power</th>
									<th>Fuel</th>
									@can('update', \App\Author::class)
										<th>Actions</th>
									@endcan
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($author->vehiclemodels() as $vehiclemodel)
                                <tr>
                                    <td>{{ $vehiclemodel->title }}</td>
                                    <td><img width="50" src={{ $vehiclemodel->photo }} /></td>
									<td>{{ $vehiclemodel->engine }}</td>
									<td>{{ $vehiclemodel->maxpower }}</td>
									<td>{{ $vehiclemodel->fuel }}</td>
			
									@can('update', \App\Author::class)
                                    <td>
                                        <a href="{{ route('vehiclemodels.edit', $vehiclemodel->id) }}" class="btn btn-default">Edit</a>
                                        @can('delete', \App\Author::class)
										<form action="{{ route('vehiclemodels.destroy', $vehiclemodel->id) }}" method="POST"
                                              style="display: inline"
                                              onsubmit="return confirm('Are you sure?');">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{ csrf_field() }}
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
										@endcan
                                    </td>
									@endcan
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No entries found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
						@can('create', \App\Author::class)
							<a href="{{ route('vehiclemodels.create') }}" class="btn btn-default">Add New Model</a>
						@endcan
						
						</div>
                </div>
            </div>
        </div>
    </div>
@endsection
