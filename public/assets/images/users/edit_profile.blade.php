@include('layouts.header')
<div class="content-container">
    <div class="content-right full">
      <div class="change-pass">
        <h2>Change Your Password</h2>
        <p>You can reset the password for your account by completing this form. New password are required to be a minimum of 6 characters in length.</p><br />
        
		@if(session()->has('message.level'))
		<div class="alert alert-{{ session('message.level') }}"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
		{!! session('message.content') !!}
		</div>
		@endif
		  
		  <form class="form-horizontal" role="form" method="POST" action="{{ url('edit-profile', encrypt($user->id))}}">
                        {{ csrf_field() }}
		  <div class="form-fields">
          <label>Old Password:</label>
          <input id="old_password" name="old_password"  autofocus type="password" />
			  @if ($errors->has('old_password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('old_password') }}</strong>
                                    </span>
                                @endif
			 
        </div>

        <div class="form-fields">
          <label>New Password:</label>
          <input id="new_password" name="new_password"  type="password"  />
			 @if ($errors->has('new_password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new_password') }}</strong>
                                    </span>
                                @endif
        </div>
        <div class="form-fields">
          <label>Re-enter New Password:</label>
          <input id="confirm_password" name="confirm_password"  type="password"  />
			 @if ($errors->has('confirm_password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('confirm_password') }}</strong>
                                    </span>
                                @endif
        </div>
        
        <div class="buttons-wraper">
          <button type="submit" >Reset</button>
         <!-- <button onclick="return sign_in()" class="create-account">Cancel</button> -->
			<a href="/"><button type="button" >Cancel</button></a>
        </div>
		</form>	
      </div>
      <div id="sign_up_div" class=" sign-up">
        <h2>Edit Profile</h2> 
        <p><strong>You can edit your profile by using the below form. </strong></p>
         <form class="form-horizontal" role="form" method="POST" action="{{ url('edit-profile', encrypt($user->id))}}">
         {{ csrf_field() }}
		  <div class="form-fields">
          <label>Gender</label>
          <input type="text" value="{{$user->gender}}" id="gender" name="gender"  autofocus />
			    @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
        </div>
        <div class="form-fields">
          <label>Year of birth </label>
          <input type="text" value="{{$user->dob}}" id="dob" name="dob" />
			@if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
        </div>
        <div class="form-fields">
          <label>Email</label>
          <input type="text" value="{{$user->email}}" id="email" name="email" />
			@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
        </div>
         <div class="form-fields">
          <label>Username</label>
          <input type="text" value="{{$user->username}}" id="username" name="username"/>
			@if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
        </div>
       	
			<div class="form-fields captcha">
          <label>Enter the word below <span>*</span></label>
          <input type="text" value="vesseal" />
          <img src="../images/captcha.png" /> </div>
			 
        <div class="buttons-wraper">
          <button type="submit">Submit Changes</button>
          <a href="/"><button type="button" >Cancel</button></a>
        </div>
        </form>
      </div>
    </div>
  </div>

@include('layouts.footer')
