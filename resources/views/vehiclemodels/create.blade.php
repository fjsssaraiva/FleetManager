@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Model</div>

                    <div class="panel-body">
                        <form action="{{ route('vehiclemodels.store') }}" method="post">
                            {{ csrf_field() }}
                            Title:
                            <br />
                            <input type="text" name="title" value="{{ old('title') }}" />
                            <br /><br />
                            Photo:
                            <br />
                            <input type="text" name="photo" value="{{ old('photo') }}" />
                            <br /><br />
							Engine:
                            <br />
                            <input type="text" name="engine" value="{{ old('engine') }}" />
                            <br /><br />
							Max Power:
                            <br />
                            <input type="text" name="maxpower" value="{{ old('maxpower') }}" />
                            <br /><br />
							Fuel:
                            <br />
                            <input type="text" name="fuel" value="{{ old('fuel') }}" />
                            <br /><br />
							FKey:
                            <br />
                            <input type="number" name="author_id" value="{{ old('author_id') }}" />
                            <br /><br />
                            <input type="submit" value="Submit" class="btn btn-default" />
                        </form>
						@if ($errors->count() > 0)
							<ul>
								@foreach($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						@endif
						<form action="{{ route('vehiclemodels.store') }}" method="post">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
