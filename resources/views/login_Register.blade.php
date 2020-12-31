@extends('layouts.app1')
@section('title','Login Page')
@section('content')
<section id="aa-myaccount">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <div class="aa-myaccount-area">         
             <div class="row">
               <div class="col-md-6">
                 <div class="aa-myaccount-login">
                 <h4>Login</h4>
          
                <form method="POST"class="aa-login-form"  action="{{ route('login') }}">
                  @csrf
                   <label for="">Username or Email address<span>*</span></label>

                    {{-- <input type="text" placeholder="Username or email"> --}}
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="nasir2301633@gmail.com{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="">Password<span>*</span></label>


                     {{-- <input type="password" placeholder="Password"> --}}

                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="nasir@1230"  required autocomplete="current-password">

                     @error('password')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                     {{-- <button type="submit" class="aa-browse-btn">Login</button> --}}
                     <button type="submit" class="aa-browse-btn">
                      {{ __('Login') }}
                  </button>
                  <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme">  {{ __('Remember Me') }} </label>
                     <p class="aa-lost-password"><a href="{{ route('password.request') }}">Lost your password?</a></p>
                   </form>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="aa-myaccount-register">                 
                  <h4>Register</h4>
                  {{-- <form action="" class="aa-login-form"> --}}
                    <form method="POST" class="aa-login-form" action="{{route('register') }}">
                      @csrf
                     <label for="">Username or Email address<span>*</span></label>
                     <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                     @error('name')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                     <label for="">Password<span>*</span></label>

                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                     @error('email')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror

                   
                      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                      
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
              
              

          
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                   
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
               
           

                     <button type="submit" class="aa-browse-btn">  {{ __('Register') }}</button>                    
                   </form>
                 </div>
               </div>
             </div>          
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection