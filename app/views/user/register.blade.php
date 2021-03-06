@extends('master')

@section('header')
    <link
        type="text/css"
        rel="stylesheet"
        href="{{ asset("css/register.css") }}"
    />
@stop

@section('content')

<div class="row row-centered" id = "loginwrapper">
    <div class="col-md-2"></div>
    <div class="col-md-8 col-centered">
        <div class="well centered">
            <legend>Đăng kí</legend>
            {{Form::open(array('url' => 'register',"id"=>"register"))}}
            <div class="form-group">
                {{Form::label('username','Tên đăng Nhập:')}}
                {{ Form::text('username','',array('class'=>'form-control','placeholder'=>'Enter Username','data-validation'=>'required','data-validation-error-msg-required'=>'Vui lòng điền đầy đủ thông tin '))}}
                 @if  ($errors->has('username')) <p><div class="alert alert-danger" role="alert">{{ $errors->first('username') }}</div></p>@endif
            </div>
            <div class="form-group">
                {{Form::label('password','Mật khẩu:')}}
                {{ Form::password('password',array('class'=>'form-control','placeholder'=>'Enter Password','data-validation'=>'required length','data-validation-error-msg-required'=>'Vui lòng điền đầy đủ thông tin','data-validation-length'=>'min6','data-validation-error-msg-length'=>'Độ dài kí tự tối thiểu là 6 '))}}
                @if ($errors->has('password')) <p><div class="alert alert-danger" role="alert">{{ $errors->first('password') }}</div> </p>@endif
            </div>
            <div class="form-group">
                {{Form::label('cpassword','Nhập lại mật khẩu:')}}
                {{ Form::password('cpassword',array('class'=>'form-control','placeholder'=>'Enter Password Again','data-validation'=>'required','data-validation-error-msg-required'=>'Vui lòng điền đầy đủ thông tin'))}}
                @if ($errors->has('cpassword'))<p><div class="alert alert-danger" role="alert">{{ $errors->first('cpassword') }}</div></p> @endif
            </div>
            <div class="form-group">
                {{Form::label('fullname','Họ và tên:')}}
                {{ Form::text('fullname','',array('class'=>'form-control','placeholder'=>'Enter Fullname','data-validation'=>'required','data-validation-error-msg-required'=>'Vui lòng điền đầy đủ thông tin'))}}
                @if ($errors->has('fullname')) <p><div class="alert alert-danger" role="alert">{{ $errors->first('fullname') }}</div> </p>@endif
            </div>
            <div class="form-group">
                {{Form::label('email','Email:')}}
                {{ Form::text('email','',array('class'=>'form-control','placeholder'=>'Enter Email','data-validation'=>'required email','data-validation-error-msg-required'=>'Vui lòng điền đầy đủ thông tin','data-validation-error-msg-email'=>'Emai không hợp lệ '))}}
                @if ($errors->has('email')) <p><div class="alert alert-danger" role="alert">{{ $errors->first('email') }}</div></p> @endif
            </div>
            <div class="form-group">
                {{Form::label('phone','Số Điện Thoại :')}}
                {{ Form::text('phone','',array('class'=>'form-control','placeholder'=>'Enter Phone Number','data-validation'=>'number','data-validation-error-msg-number'=>'Kí tự phải là số'))}}
                @if ($errors->has('phone')) <p><div class="alert alert-danger" role="alert">{{ $errors->first('phone') }}</div> </p>@endif
            </div>
             <div class="form-group">
                {{Form::label('address','Địa chỉ :')}}
                {{ Form::text('address','',array('class'=>'form-control','placeholder'=>'Enter Address'))}}
            </div>
            {{Form::submit('Đăng kí',array('class'=>'btn btn-success'))}}
            <a href="/" class = "btn btn-primary">Hủy</a>
            {{Form::close()}}
        </div>
    </div>
</div>


    <script>
        $.validate({
        form : '#register'
    });
</script>

@stop