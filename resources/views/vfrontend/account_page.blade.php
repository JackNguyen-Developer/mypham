@extends('layout.frontend.master')

@section('content')
<section class="main-container col1-layout">
  <div class="main container">
    <div class="account-login">
      <div class="page-title">
        <h1>Đăng Nhập Hoặc Tạo Tài Khoản</h1>
      </div>
      <fieldset class="col2-set">
        <div class="col-1 new-users"><strong>Tạo Tài Khoản</strong>

          <form action="{{Route('postregister')}}" method="post">
           {{ csrf_field() }}
           <div class="content">
            <ul class="form-list">

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
                <input type="text" title="Email Address" class="input-text required-entry" id="phonenumber_re" value="{{old('phone')}}" name="phone">
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
              <button id="send2_re" name="send" type="submit" class="button login"><span>Tạo Tài Khoản</span></button>
            </div>
          </div>
        </form>

      </div>
      <div class="col-2 registered-users"><strong>Đăng Nhập</strong>

        <form action="{{Route('postlogin')}}" method="post">

          {{csrf_field()}}
          <div class="content">
            <p>Nếu bạn đã có tài khoản ,làm ơn đăng nhập .</p>
            <ul class="form-list">
              <li>
                <label for="email_lo">Email Address <span class="required">*</span></label>
                <br>
                <input type="text" title="Email Address" class="input-text required-entry" id="email_lo" value="" name="email_lo">
              </li>
              @if($errors->has('email'))
              <p class="required vadilator-register">{{$errors->first('email')}}</p>

              @endif

              <li>
                <label for="pass_lo">Password <span class="required">*</span></label>
                <br>
                <input type="password" title="Password" id="pass_lo" class="input-text required-entry validate-password" name="password_lo">
              </li>
              @if($errors->has('password'))
              <p class="required vadilator-register">{{$errors->first('password')}}</p>

              @endif
            </ul>
            <p class="required">* Required Fields</p>
            <div class="buttons-set">
              <button id="send2_lo" name="send" type="submit" class="button login"><span>Đăng Nhập</span></button>
              <a class="forgot-word" href="http://demo.magentojtv.com/computerstore/customer/account/forgotpassword/">Forgot Your Password?</a> </div>
            </div>
          </form>


        </div>
      </fieldset>
    </div>

  </div>
</section>













@endsection