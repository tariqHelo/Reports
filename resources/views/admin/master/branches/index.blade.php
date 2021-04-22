@extends('layouts.app') 
@section('content')
@include('shared.msg')

 <div class="table-toolbar">
                <div class="row">
                    <div class="col-md-6">
						@can('Branches_create')
							 <div class="btn-group">
								<a href="{{route('branches.create')}}" class="btn green">
									إضافة<i class="fa fa-plus"></i>
								</a>
							</div>
						@endcan
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
									 مدير الإدارة
								</th>
								<th>
									إسم الإدارة التابع لها         
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
											{{ $branche->user->name ?? ""  }}
                                        </td>
										<td>
                                           {{ $branche->publicAdministration->title ?? "" }}
										</td>
									
                                        	<td>   
												@can('Branches_edit')
											    	<a href="{{route('branche-edit' ,$branche->id )}}"  class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
												@endcan
												@can('Branches_delete')
											    	<a href="{{route('branche-delete' , $branche->id)}}" onclick='return confirm("Are you sure dude?")' class="btn btn-warning btn-sm"><i class='fa fa-trash'></i></a>
												@endcan
										</td>
									</tr>
                            @endforeach
						  
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
		       </div>
         </table>
    
@endsection