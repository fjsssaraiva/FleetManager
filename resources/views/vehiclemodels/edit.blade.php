@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
					<div class="panel-heading">Edit Model</div>

						<div class="panel-body">
							@if ($errors->count() > 0)
								<ul>
									@foreach($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							@endif
							<form action="{{ route('vehiclemodels.update', $vehiclemodel->id) }}" method="post">
								<input type="hidden" name="_method" value="PUT">
								{{ csrf_field() }}
								Title:
								<br />
								<input type="text" name="title" value="{{ $vehiclemodel->title }}" />
								<br /><br />
								Photo:
								<br />
								<input type="text" name="photo" value="{{ $vehiclemodel->photo }}" />
								<br /><br />
								Engine:
								<br />
								<input type="text" name="engine" value="{{ $vehiclemodel->engine }}" />
								<br /><br />
								Max Power:
								<br />
								<input type="text" name="maxpower" value="{{ $vehiclemodel->maxpower }}" />
								<br /><br />
								Fuel:
								<br />
								<input type="text" name="fuel" value="{{ $vehiclemodel->fuel }}" />
								<br /><br />
								<input type="submit" value="Submit" class="btn btn-default" />
							</form>
						</div>
                </div>
            </div>
        </div>
    </div>
@endsection
