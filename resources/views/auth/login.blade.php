<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>  
        <title>Student Portal || Login</title> 
        <link rel="stylesheet" type="text/css" id="theme"  href="{{ asset('css/theme-default.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="login-container">
            <div class="login-box animated fadeInDown">
                <div class="login-logo"><img class="student_portal_logo" src="{{asset('public/image/student_portal_logo.png')}}"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Welcome</strong>, Please login</div>
                   <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                                <input id="email" placeholder="Email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                           
                        </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           
                                <input id="password"  placeholder="Password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                           
                        </div>
                    <div class="form-group">
                            
                                <div class="checkbox">
                                    <label>
                                        &nbsp;&nbsp;<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                
                            </div>
                        </div>
						<div class="form-group">
                        <div class="col-md-6">
                            <a href="{{ route('password.request') }}" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary btn-info btn-block">
                                    Login
                                </button>
                        </div>
                    </div>
						
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2018 Student Portal
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>






