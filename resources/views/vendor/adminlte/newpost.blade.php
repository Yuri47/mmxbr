@extends('vendor.adminlte.layouts.app')

@section('main-content')
<form action="/admin/createpost" method="POST" role="form" enctype="multipart/form-data">
	<legend>Form title</legend>
	{{$teste}}
	<div class="form-group">
		<input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
		<label for="">Titulo</label>
		<input type="text" class="form-control" id="" name="title" placeholder="Input field">
		
		<label for="">Descrição</label>
		<input type="text" class="form-control" id="" name="description" placeholder="Input field">
		
		<label for="">Conteúdo</label>
		<input type="text" class="form-control" id="" name="content" placeholder=" ">
		 




		<input type="file" name="photo" id="">
	</div>

	

	<button type="submit" class="btn btn-primary">Submit</button>
</form>


img:<img src="../img/postImages/f0963d7b0583f01ec2e7038ea4e06270.jpeg" alt="tst">


@endsection


 