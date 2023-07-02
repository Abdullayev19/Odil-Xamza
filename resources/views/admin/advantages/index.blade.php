@extends('layouts.admin') @section('content')
<div class="container">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
						<div class="col-sm-12">
							<table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
								<thead>
									<tr role="row">
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> ID </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"> Sarlavxa</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style=""> Tavsif </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style=""> Rasm </th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style=""> Tugmalar </th>
									</tr>
								</thead>
								<tbody> 
                                    @foreach ($advantagies as $advantages)
									<tr class="odd">
										<td>{{$advantages->id}}</td>
										<td>{{$advantages->title}}</td>
										<td>{{$advantages->description}}</td>
                                        <td><img src="/admin_r/images/{{$advantages->image}} " width="350px" alt=""></td>
										<td><a href="{{route('advantages.edit', $advantages->id)}}" class="btn btn-success">Tahrirlash</a>
									</tr> 
                                    @endforeach 
                            </div>
					</div>
					<!-- /.card-body -->
				</div>
			</div>
		</div> 
		@endsection