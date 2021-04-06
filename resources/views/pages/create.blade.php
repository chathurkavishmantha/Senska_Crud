@extends('layout.shop')

@section('content')
<div class="center-form">
    {{-- <form action = "/store" method = "post">
        {{csrf_field()}} --}}
        {{-- <input type="text" name="student"> --}}
        {{-- <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="email" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form> --}}

      <!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
    <li class="nav-item" role="presentation">
      <a
        class="nav-link "
        id="tab-login"
        data-mdb-toggle="pill"
        href="#pills-login"
        role="tab"
        aria-controls="pills-login"
        aria-selected="true"
        >Login</a
      >
    </li>
    <li class="nav-item" role="presentation">
      <a
        class="nav-link active" 
        id="tab-register"
        data-mdb-toggle="pill"
        href="#pills-register"
        role="tab"
        aria-controls="pills-register"
        aria-selected="false"
        >Register</a
      >
    </li>
  </ul>
  <!-- Pills navs -->
  
  <!-- Pills content -->
  <div class="tab-content">
    <div
      class="tab-pane fade show active"
      id="pills-login"
      role="tabpanel"
      aria-labelledby="tab-login"
    >
      <form action = "/store" method = "post">
        {{csrf_field()}} 
        <div class="text-center mb-3">
          <p>Sign in with:</p>
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
          </button>
  
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-google"></i>
          </button>
  
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-twitter"></i>
          </button>
  
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-github"></i>
          </button>
        </div>
  
        <p class="text-center">or:</p>
  
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="text" name="name" id="loginName" class="form-control" />
          <label class="form-label" for="loginName">Username</label>
        </div>
  
        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="email" name="email" id="loginPassword" class="form-control" />
          <label class="form-label" for="loginPassword">Email</label>
        </div>
  
        <!-- 2 column grid layout -->
        <div class="row mb-4">
          <div class="col-md-6 d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check mb-3 mb-md-0">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="loginCheck"
                checked
              />
            </div>
          </div>
  
          <div class="col-md-6 d-flex justify-content-center">
            <!-- Simple link -->
            <a href="#!">Forgot password?</a>
          </div>
        </div>
  
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
  
        <!-- Register buttons -->
        <div class="text-center">
          <p>Not a member? <a href="#!">Register</a></p>
        </div>
      </form>
    </div>
    <div
      class="tab-pane fade"
      id="pills-register"
      role="tabpanel"
      aria-labelledby="tab-register"
    >
      <form>
        <div class="text-center mb-3">
          <p>Sign up with:</p>
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
          </button>
  
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-google"></i>
          </button>
  
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-twitter"></i>
          </button>
  
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-github"></i>
          </button>
        </div>
  
        <p class="text-center">or:</p>
  
        <!-- Name input -->
        <div class="form-outline mb-4">
          <input type="text" id="registerName" class="form-control" />
          <label class="form-label" for="registerName">Name</label>
        </div>
  
        <!-- Username input -->
        <div class="form-outline mb-4">
          <input type="text" id="registerUsername" class="form-control" />
          <label class="form-label" for="registerUsername">Username</label>
        </div>
  
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" id="registerEmail" class="form-control" />
          <label class="form-label" for="registerEmail">Email</label>
        </div>
  
        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="password" id="registerPassword" class="form-control" />
          <label class="form-label" for="registerPassword">Password</label>
        </div>
  
        <!-- Repeat Password input -->
        <div class="form-outline mb-4">
          <input type="password" id="registerRepeatPassword" class="form-control" />
          <label class="form-label" for="registerRepeatPassword">Repeat password</label>
        </div>
  
        <!-- Checkbox -->
        <div class="form-check d-flex justify-content-center mb-4">
          <input
            class="form-check-input me-2"
            type="checkbox"
            value=""
            id="registerCheck"
            checked
            aria-describedby="registerCheckHelpText"
          />
          <label class="form-check-label" for="registerCheck">
            I have read and agree to the terms
          </label>
        </div>
  
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
      </form>
    </div>
  </div>
  <!-- Pills content -->
</div>


    
@endsection