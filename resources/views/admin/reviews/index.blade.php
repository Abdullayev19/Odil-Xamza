@extends('layouts.admin') 
@section('content')
<div class="container">
	<div class="col-md-12"> <a href="{{route('reviews.create')}}" class="btn btn-primary"> Ma'lumot Qo'shish</a>
		<div class="card">
			<div class="card-body">
				<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
						<div class="col-sm-12">
							<table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
								<thead>
									<tr role="row">
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> ID </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> Ism</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> Kasb</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> Rasm </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Tugmalar</th>
									</tr>
								</thead>
								<tbody> 
                                    @foreach ($reviews as $reviews)
									<tr class="odd">
										<td>{{$reviews->id}}</td>
										<td>{{$reviews->name}}</td>
										<td>{{$reviews->message}}</td>
                                        <td><img src="/admin_r/images/{{$reviews->image}} " width="350px" alt=""></td>
										<td><a href="{{route('reviews.edit', $reviews->id)}}" class="btn btn-success">Tahrirlash</a>
											<br>
											<br>
											<form action="{{route('reviews.destroy', $reviews->id)}}" method="POST"> 
                                                @csrf 
                                                @method('DELETE')
												<input type="submit" value="O'chirish" class="btn btn-danger"> 
                                            </form>
										</td>
									</tr> 
                                    @endforeach 
                            </div>
					</div>
					<!-- /.card-body -->
				</div>
			</div>
		</div> 
		@endsection