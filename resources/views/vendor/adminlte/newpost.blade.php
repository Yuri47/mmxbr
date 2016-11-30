@extends('vendor.adminlte.layouts.app')

@section('main-content')
<form action="" method="POST" role="form">
	<legend>Form title</legend>
	{{$teste}}
	<div class="form-group">
		<label for="">label</label>
		<input type="text" class="form-control" id="" placeholder="Input field">
	</div>

	

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
