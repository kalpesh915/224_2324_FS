@extends("layouts.master")

@section("title")
    Login
@endsection

@section("sidebar")
    <h1>Welcome to Login Page</h1>
@endsection

@section("data")
    @if (session("error"))
        <div class="alert alert-danger alert-dismissible">
            <button class="btn-close" data-bs-dismiss="alert"></button>
            <b>Error : </b> {{ session("error") }}
        </div>
    @endif
    @if (session("success"))
        <div class="alert alert-success alert-dismissible">
            <button class="btn-close" data-bs-dismiss="alert"></button>
            <b>Success : </b> {{ session("success") }}
        </div>
    @endif
    <form action="/loginprocess" method="post">
        @csrf
        <div class="my-3 form-floating">
            <input type="email" name="email" id="email" required class="form-control" placeholder="Enter Email Address" >
            <label for="email" class="form-label">Enter EMail Address</label>
        </div>
        <div class="my-3 form-floating">
            <input type="password" name="password" id="password" required class="form-control" placeholder="Enter Email Password" >
            <label for="password" class="form-label">Enter EMail Password</label>
        </div>
        <div class="my-3">
            <input type="submit" value="Login" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-danger">
        </div>
    </form>
@endsection