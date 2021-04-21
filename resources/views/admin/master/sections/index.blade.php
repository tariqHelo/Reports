@extends('layouts.app') 
@section('content')
@include('shared.msg')

 <div class="table-toolbar">
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group">
						<a href="{{route('sections.create')}}" class="btn green">
                            إضافة<i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
	         <div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box purple">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>الإقسام
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
									 إسم القسم
								</th>
								<th>
									الإدارة  العامة التابع لها 
								</th>
								<th>
									الإدارة  التابع لها 
								</th>
                                <th>
									 مدير الإدارة
								</th>
								<th>
									 Action
								</th>
							</tr>
                            </thead>
                            
								@foreach ($sections as $section )
									<tr class="odd gradeX">
											<td>
											    {{ $section->id }}
											</td>
											<td>
												{{ $section->title }}
											</td>
											<td>
												{{ $section->publicAdministration->title ?? "" }}
											</td>	
											<td>
												{{ $section->administration->title ?? "" }}
											</td>
											<td>
												{{ $section->user->name ?? "" }}
											</td>
												<td>   
												<a href="{{route('section-edit' , $section->id )}}"  class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
												<a href="{{route('section-delete'   , $section->id )}}" onclick='return confirm("Are you sure dude?")' class="btn btn-warning btn-sm"><i class='fa fa-trash'></i></a>
										
											</td>
										</tr>
								@endforeach
						  
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
		       </div>
         </table>
    

@endsection