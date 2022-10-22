@extends('template.main_register')
@section('content_register')
<div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="../../index2.html" class="h1"><b>KIMIA</b>FARMA</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Daftarkan dirimu untuk mengakses kedalam website.</p>
  
        <form action="/register" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control 
            @error('name')
              is-invalid
            @enderror" 
            placeholder="Full name" name="name" id="name" autofocus required value="{{old('name')}} ">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            @error('name')
              <div class="invalid-feedback">
              {{$message}}  
              </div> 
            @enderror
          </div>

          <div class="input-group mb-3">
            <input type="email" class="form-control
            @error('email')
              is-invalid
            @enderror" 
            placeholder="Email" name="email" id="email" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            @error('email')
              <div class="invalid-feedback">
              {{$message}}  
              </div> 
            @enderror
          </div>

          <div class="input-group mb-3">
            <input type="number" class="form-control
            @error('telephone')
              is-invalid
            @enderror" 
            placeholder="Telephone" name="telephone" id="telephone" required value="{{old('telephone')}} ">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-phone"></span>
              </div>
            </div>
            @error('telephone')
              <div class="invalid-feedback">
              {{$message}}  
              </div> 
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control
            @error('password')
              is-invalid
            @enderror" 
            placeholder="Password" name="password" id="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('password')
              <div class="invalid-feedback">
              {{$message}}  
              </div> 
            @enderror
          </div>

          <div class="input-group mb-3">
            <input type="password" class="form-control
            @error('repassword')
              is-invalid
            @enderror" placeholder="Retype password" id="repassword" name="repassword">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('repassword')
            <div class="invalid-feedback">
            {{$message}}  
            </div> 
            @enderror
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <p class="text-center mt-3">
            <a href="/login">I already have a membership</a>
        </p>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->
@endsection