@extends('layouts.app') 
@section('content')
@include('shared.msg')

  <div class="table-toolbar">
                <div class="row">
                    <div class="col-md-6">
						@can('Administration_create')
							<div class="btn-group">
								<a href="{{route('administration.create')}}" class="btn green">
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
					<div class="portlet box yellow">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>الإدارة 
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
							    	 إسم الإدارة
                                </th>
                                <th>
									 الإدارة العامة التابع لها 
								</th>
								<th>
							    	الفرع التابع بها
                                </th>
                                <th>
									 مدير الإدارة
								</th>
								<th>
									 Action
								</th>
							</tr>
                            </thead>
                            
                            @foreach ($administrations as $administration )
                                <tr class="odd gradeX">
										<td>
                                           {{ $administration->id }}
										</td>
										<td>
                                           {{ $administration->title ?? "" }}
										</td>
										<td>
										 {{ $administration->publicAdministration->title ?? ""}}
										</td>
										<td>
											{{ $administration->branche->title ?? "" }}
										</td>
										<td>
											{{ $administration->user->name ?? "" }}
                                        </td>
                                        	<td> 
											   @can('Administration_edit')
											    <a href="{{route('administration-edit'   ,$administration->id )}}"  class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
											   @endcan  
											   @can('Administration_delete')
												<a href="{{route('administration-delete' ,$administration->id )}}" onclick='return confirm("Are you sure dude?")' class="btn btn-warning btn-sm"><i class='fa fa-trash'></i></a>
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