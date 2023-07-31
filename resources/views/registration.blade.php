@extends('main.master')
@section('master')

<link rel="stylesheet" href="assets/css/registration.css">
<!-- main -->
<div class="main-w3layouts wrapper">
    {{-- <h1>Creative SignUp Form</h1> --}}
    <div class="main-agileinfo">
        <div class="agileits-top">
            <form action="{{route('RegDataSave')}}" method="post">
                @csrf
                <span class="text-danger">@error('Username'){{$message}}@enderror</span>
                <input class="text" type="text" value="{{old('Username')}}" name="Username" placeholder="Username">
                <div style="margin-top: 2.3rem">
                    <span class="text-danger">@error('contact'){{$message}}@enderror</span>
                    <input class="text number mt-0" value="{{old('contact')}}" type="number" name="contact" placeholder="Contact No">
                </div>
                <div>
                    <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    <input class="text email mt-0" type="text" value="{{old('email')}}" name="email" placeholder="Email">
                </div>
                <span class="text-danger">@error('password'){{$message}}@enderror</span>
                <input class="text" type="password" value="{{old('password')}}" name="password" placeholder="Password">

                <input type="submit" value="SUBMIT">
            </form>
            <p>Don't have an Account? <a href="#"> Login Now!</a></p>
        </div>
    </div>
</div>
<!-- //main -->
@endsection