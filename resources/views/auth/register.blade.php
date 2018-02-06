<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>  
        <title>Student Portal || Register</title> 
        <link rel="stylesheet" type="text/css" id="theme"  href="{{ asset('css/theme-default.css') }}" rel="stylesheet">
    </head>
    <body>
        
        <div class="registration-container">            
            <div class="registration-box animated fadeInDown">
                <div class="registration-logo"><img class="student_portal_logo" src="{{asset('public/image/student_portal_logo.png')}}"></div>
                <div class="registration-body">
                    <div class="registration-title"><strong>Registration Form</strong></div>
                    <div class="registration-subtitle">Do you want to work with us? Please fill in your details below. </div>
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           
                                <input id="name"   placeholder="Name" type="text" class="form-control"  name="name" value="{{ old('name') }}" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                          
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                                <input id="email"   placeholder="Email"  type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           
                                <input id="password"   placeholder="Password"  type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="form-group">
                            
                                <input id="password-confirm"   placeholder="Confirm Password"   type="password" class="form-control" name="password_confirmation" required>
                           
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="registration-footer">
                    <div class="pull-left">
                        &copy; 2018 Student Portal
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>






