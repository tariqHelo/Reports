@extends('layouts.app') 
@section('content')
@include('shared.msg')

 <div class="table-toolbar">
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group">
						<a href="{{route('branches.create')}}" class="btn green">
                            إضافة<i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
	         <div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i> الفروع
							</div>
					    	</div>
				     		<div class="portlet-body">
						
							<table id="studentsTable" class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
                                <th>
									 #
								</th>
								<th>
									 إسم الفرع
								</th>
								<th>
									إسم الإدارة التابع لها         
                                </th>
                                <th>
									 مدير الإدارة
								</th>
								<th>
									 Action
								</th>
							</tr>
                            </thead>
                            
                            @foreach ($branches as $branche )
                                <tr class="odd gradeX">
										<td>
                                           {{ $branche->id }}
										</td>
										<td>
											{{ $branche->title }}
										</td>
										<td>
                                           {{ $branche->public_id }}
										</td>
										<td>
											{{ $branche->user_id }}
                                        </td>
                                        	<td>   
											<a href="{{route('branche-edit' ,$branche->id )}}"  class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
											<a href="{{route('branche-delete' , $branche->id)}}" onclick='return confirm("Are you sure dude?")' class="btn btn-warning btn-sm"><i class='fa fa-trash'></i></a>
									
										</td>
									</tr>
                            @endforeach
						  
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
		       </div>
         </table>
    
@endsection