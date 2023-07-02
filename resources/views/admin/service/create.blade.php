@extends('layouts.admin') @section('content')
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
	body {
		margin-left: 2%;
		margin-right: 2%;
	}
	</style>
</head>

<body>
	<h1 style="text-align: center">Ma'lumot Qo'shish</h1>
	<form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf 
        @method('post')
		<div class="form-group">
			<label for="">Sarlavxa</label>
			<input type="text" name="name" class="form-control"> 
        </div>
		<div class="form-group">
			<label for="">Tavsif</label>
			<input type="text" name="description" class="form-control"> 
        </div>
		<div class="form-group">
			<label for="">Rasm</label>
			<input type="file" name="image" class="form-control"> 
        </div>
		<br>
		<br>
		<div class="form-group">
			<input type="submit" name="s1" class="btn btn-primary" value="TAYYOR"> </div>
	</form>
</body>

</html> @endsection