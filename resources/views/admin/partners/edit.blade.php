@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
       form{
          margin-left: 50px;
          margin-right: 70px;
       }
       h1{
          text-align: center;
       }
    </style>
</head>
<body>
    <h1>Ma'hsulot ID{{$partner->id}}</h1>
     <form action="{{ route('partners.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
       @method('put')
       <div class="form-group">
          <label for="">Nomi</label>
          <input type="text" name="title" class="form-control" value="{{$partner->title}}">
       </div>
       <div class="form-group">
        <label for="">Rasm</label>
        <input type="file" name="image" class="form-control" value="{{$partner->image}}">
       </div>
       <div class="form-group">
          <input type="submit" name="s1" value="UPDATE" class="btn btn-primary">
      </div>  
     </form>
</body>
</html>
@endsection