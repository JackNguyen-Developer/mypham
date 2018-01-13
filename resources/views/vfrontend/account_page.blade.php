@extends('layout.frontend.master')

@section('content')
<section class="main-container col1-layout">
  <div class="main container">

    @if(!Auth::check())
    <div class="account-login">
      <div class="page-title">
        <h1>Đăng Nhập Hoặc Tạo Tài Khoản</h1>
      </div>
      <fieldset class="col2-set">
        <div class="col-1 new-users"><strong>Tạo Tài Khoản</strong>
          @if (Session::has('success'))
          <div class="alert alert-success">
            <strong style="color: red" >Chúc Mừng !</strong> {{ Session::get('success') }} .
          </div>
          @endif

          @if (Session::has('warning'))
          <div class="alert alert-danger">
            <strong>Chia buồn !</strong> {{ Session::get('warning') }} .
          </div>
          @endif


          <form action="{{Route('postregister')}}" method="post">
           {{ csrf_field() }}
           <div class="content">
            <ul class="form-list">

              <li>
                <label for="name_re">Fullname <span class="required">*</span></label>
                <br>
                <input type="text" title="Email Address" class="input-text required-entry" id="name_re" value="{{old('name')}}" name="name">
              </li>
              @if($errors->has('name'))
              <p class="required vadilator-register">{{$errors->first('name')}}</p>

              @endif              
              <li>
                <label for="email_re">Email<span class="required">*</span></label>
                <br>
                <input type="text" title="Email Address" class="input-text required-entry" id="email_re" value="{{old('email')}}" name="email">
              </li>
              @if($errors->has('email'))
              <p class="required vadilator-register">{{$errors->first('email')}}</p>

              @endif


              <li>
                <label for="phonenumber_re">Số Điện Thoại <span class="required">*</span></label>
                <br>
                <input type="tel" title="Email Address" class="input-text required-entry" id="phonenumber_re" value="{{old('phone')}}" name="phone">
              </li>
              @if($errors->has('phone'))
              <p class="required vadilator-register">{{$errors->first('phone')}}</p>

              @endif

              <li>
                <label for="pass_re">Password <span class="required">*</span></label>
                <br>
                <input type="password" title="Password"  value="{{old('password')}}"  id="pass_re" class="input-text required-entry validate-password" name="password">
              </li>
              @if($errors->has('password'))
              <p class="required vadilator-register">{{$errors->first('password')}}</p>

              @endif

              <li>
                <label for="repass_re">Nhập Lại Password <span class="required">*</span></label>
                <br>
                <input type="password" title="Password" value="{{old('repassword')}}" id="repass_re" class="input-text required-entry validate-password" name="repassword">
              </li>
              @if($errors->has('repassword'))
              <p class="required vadilator-register">{{$errors->first('repassword')}}</p>

              @endif

              <li>
                <label for="address_re">Địa Chỉ <span class="required">*</span></label>
                <br>
                <input type="text" title="Email Address" class="input-text required-entry" id="address_re" value="{{old('address')}}" name="address">
              </li>
              @if($errors->has('address'))
              <p class="required vadilator-register">{{$errors->first('address')}}</p>

              @endif


            </ul>
            <p class="required">* Trường bắt buột</p>
            <div class="buttons-set">
              <button  type="submit" class="button login"><span>Tạo Tài Khoản</span></button>
            </div>
          </div>
        </form>

      </div>
      <div class="col-2 registered-users"><strong>Đăng Nhập</strong>
        @if (Session::has('warninglogin'))
        <div class="alert alert-danger">
          <strong style="color: red;">Chia buồn !</strong> {{ Session::get('warninglogin') }} .
        </div>
        @endif

        <form action="{{Route('postlogin')}}" method="post">

          {{csrf_field()}}
          <div class="content">
            <p>Nếu bạn đã có tài khoản ,làm ơn đăng nhập .</p>
            <ul class="form-list">
              <li>
                <label for="email_lo">Email Address <span class="required">*</span></label>
                <br>
                <input type="text" title="Email Address" class="input-text required-entry" id="email_lo" value="{{old('email_lo')}}" name="email_lo">
              </li>
              @if($errors->has('email_lo'))
              <p class="required vadilator-register">{{$errors->first('email_lo')}}</p>

              @endif

              <li>
                <label for="pass_lo">Password <span class="required">*</span></label>
                <br>
                <input type="password" title="Password" id="pass_lo" class="input-text required-entry validate-password" value="{{old('password_lo')}}" name="password_lo">
              </li>
              @if($errors->has('password_lo'))
              <p class="required vadilator-register">{{$errors->first('password_lo')}}</p>

              @endif

              <li>


                <input  name="remember" value="true" type="checkbox" />
                <label for="pass_lo">  Remember me</label>
              </li>
            </ul>
            <p class="required">* Required Fields</p>
            <div class="buttons-set">
              <button  type="submit" class="button login"><span>Đăng Nhập</span></button>

              <a class="forgot-word" href="http://demo.magentojtv.com/computerstore/customer/account/forgotpassword/">Forgot Your Password?{{ __('auth.failednnn') }}</a> </div>
            </div>
          </form>


        </div>
      </fieldset>
    </div>
    @else
    <div class="account-login">
      <div class="page-title">
        <h1>Thông Tin Tài Khoản</h1>
      </div>
      <fieldset class="col2-set">
        <div class="col-1 new-users"><strong>Thông Tin</strong>
          @if (Session::has('success'))
          <div class="alert alert-success">
            <strong style="color: red" >Chúc Mừng !</strong> {{ Session::get('success') }} .
          </div>
          @endif

          @if (Session::has('warning'))
          <div class="alert alert-danger">
            <strong>Chia buồn !</strong> {{ Session::get('warning') }} .
          </div>
          @endif

          <form action="{{Route('postupdateregister')}}" method="post">
           {{ csrf_field() }}
           <div class="content">
            <ul class="form-list">

              <li>
                <label for="name_re">Fullname <span class="required">*</span></label>
                <br>
                <input type="text" title="Email Address" class="input-text required-entry" id="name_re" value="{{Auth::user()->name}}" name="name">
              </li>
              @if($errors->has('name'))
              <p class="required vadilator-register">{{$errors->first('name')}}</p>

              @endif 


              <li>
                <label for="email_re">Email<span class="required">*</span></label>
                <br>
                <input type="text" disabled="disabled" title="Email Address" class="input-text required-entry" id="email_re" value="{{Auth::user()->email}}" name="email">
              </li>             


              <li>
                <label for="phonenumber_re">Số Điện Thoại <span class="required">*</span></label>
                <br>
                <input type="tel" title="Email Address" class="input-text required-entry" id="phonenumber_re" value="{{Auth::user()->phone}}" name="phone">
              </li>
              @if($errors->has('phone'))
              <p class="required vadilator-register">{{$errors->first('phone')}}</p>

              @endif

<!--               <li>
                <label for="pass_re">Password <span class="required">*</span></label>
                <br>
                <input type="password" title="Password"  value="{{old('password')}}"  id="pass_re" class="input-text required-entry validate-password" name="password">
              </li>
              @if($errors->has('password'))
              <p class="required vadilator-register">{{$errors->first('password')}}</p>

              @endif

              <li>
                <label for="repass_re">Nhập Lại Password <span class="required">*</span></label>
                <br>
                <input type="password" title="Password" value="{{old('repassword')}}" id="repass_re" class="input-text required-entry validate-password" name="repassword">
              </li>
              @if($errors->has('repassword'))
              <p class="required vadilator-register">{{$errors->first('repassword')}}</p>

              @endif
            -->
            <li>
              <label for="address_re">Địa Chỉ <span class="required">*</span></label>
              <br>
              <input type="text" title="Email Address" class="input-text required-entry" id="address_re" value="{{Auth::user()->address}}" name="address">
            </li>
            @if($errors->has('address'))
            <p class="required vadilator-register">{{$errors->first('address')}}</p>

            @endif


          </ul>
          <p class="required">* Trường bắt buột</p>
          <div class="buttons-set">
            <button  type="submit" class="button login"><span>Cập Nhật</span></button>
          </div>
        </div>
      </form>

    </div>
    <div class="col-2 registered-users"><strong>Đổi Mật Khẩu</strong>

      @if (Session::has('successpass'))
      <div class="alert alert-success">
        <strong style="color: red" >Chúc Mừng !</strong> {{ Session::get('successpass') }} .
      </div>
      @endif

      @if (Session::has('warningpass'))
      <div class="alert alert-danger">
        <strong>Chia buồn !</strong> {{ Session::get('warningpass') }} .
      </div>
      @endif

      <form action="{{Route('postUpdatePassword')}}" method="post">

        {{csrf_field()}}
        <div class="content">
          <ul class="form-list">



            <li>
              <label for="pass_re">Mật khẩu Mới <span class="required">*</span></label>
              <br>
              <input type="password" title="Password"  value="{{old('password')}}"  id="pass_re" class="input-text required-entry validate-password" name="password">
            </li>
            @if($errors->has('password'))
            <p class="required vadilator-register">{{$errors->first('password')}}</p>

            @endif

            <li>
              <label for="repass_re">Nhập Lại Mật Khẩu <span class="required">*</span></label>
              <br>
              <input type="password" title="Password" value="{{old('repassword')}}" id="repass_re" class="input-text required-entry validate-password" name="repassword">
            </li>
            @if($errors->has('repassword'))
            <p class="required vadilator-register">{{$errors->first('repassword')}}</p>

            @endif



          </ul>
          <p class="required">* Required Fields</p>
          <div class="buttons-set">
            <button  type="submit" class="button login"><span>Đổi Mật Khẩu</span></button>

            <a class="forgot-word" href="http://demo.magentojtv.com/computerstore/customer/account/forgotpassword/">Forgot Your Password?{{ __('auth.failednnn') }}</a> </div>
          </div>
        </form>


      </div>
    </fieldset>
  </div>


  @endif

</div>
</section>













@endsection