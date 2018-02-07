@include('layouts.header')
              <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <div class="rows">
                        <div class="col-md-12">
						 <form class="form-horizontal" method="POST" action="SaveAdmin">
						   {{ csrf_field() }}
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Add </strong> Admin</h3>
                                    <ul class="panel-controls">
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Admin Name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
														
<input id="username"  placeholder="username" type="textbox" class="form-control" name="username" required>
                                                    </div>
                                                </div>
                                            </div><br><br>
											<div class="form-group">
                                                <label class="col-md-3 control-label">Admin Password</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
<input id="password"  placeholder="password" type="password" class="form-control" name="password" required>
                                                    </div>
                                                </div>
                                            </div><br><br>
											<div class="form-group">
                                                <label class="col-md-3 control-label">Valid Till (days)</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
<input id="day"  placeholder="day" type="number" class="form-control" name="day" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">  

                            <button type="submit" class="btn btn-primary pull-right">
                                    Add
                                </button>
                       
                                </div>
								
                            </div>
                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>               
        <!-- END PAGE CONTAINER -->                                             
@include('layouts.footer')