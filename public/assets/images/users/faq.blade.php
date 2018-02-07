@include('layouts.admin_header')
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                    <li class="active">FAQ</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
				@if(session()->has('message.level'))
				<div class="alert alert-{{ session('message.level') }}"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
				{!! session('message.content') !!}
				</div>
				@endif
				<div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span>FAQ</h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
 				<form class="form-horizontal" role="form" method="POST" action="{{ url('admin/edit-faq')}}">
					{{ csrf_field() }}
				<div class="page-content-wrap">                
                    <div class="row">
                        <div class="col-md-12">
 				             <div class="block">
                                <h4>Edit</h4>
                                    <p>FAQ Page Content</p>
                                <textarea name="content" id="content" class="summernote">{{$page->content}}</textarea>
                            </div>
                        </div>                   
                    </div>
			    <div class="panel-footer">
						<button type="submit" class="btn btn-primary pull-right">Submit</button>
               </div>
                </div>
				</form>	
					
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
@include('layouts.admin_footer')