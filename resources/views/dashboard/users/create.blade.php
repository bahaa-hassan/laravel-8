@extends('layouts.app')


@section('content')
<section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">إضافة مستخدم</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="/dashboard/users/save">
                @csrf
                @if (session()->has('message'))
                   <div class="alert alert-success">
                       {{ session()->get('message') }}
                   </div>
                @endif
               <!-- @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                @endforeach
                     </ul>
                  </div>
                @endif-->
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">الأسم</label>
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter name"value="{{ old('name') }}">
                      @error('name')
                         <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">البريد الألكتروني</label>
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror " id="exampleInputEmail1" placeholder="Enter email"value="{{ old('email') }}">
                      @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">كلمة المرور</label>
                      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Password"value=" {{ old('password') }}">
                      @error('password')
                         <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">أعادة كتابة كلمة مرور </label>
                      <input type="password" name="conf_password" class="form-control @error('conf_password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Password"value=" {{ old('conf_password') }}">
                      @error('conf_password')
                         <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">حفظ</button>
                  </div>
                </form>
              </div>
          </div>   
        </section>
@endsection