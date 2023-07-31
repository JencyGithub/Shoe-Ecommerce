@extends('main.master')
@section('master')
    <section class="vh-100" style="background-color:  #59ab6e;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-lg-0">
                    <div class="card " style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-4 gradient-custom text-center text-white"
                                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                    alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                <h5 class="text-dark ml-3">jency kachhadiya</h5>
                                <p class="text-dark ml-3">Web Designer</p>
                                <a href="{{ route('update') }}" class="text-white">
                                    <i class="far fa-edit mb-5 text-success mx-2"></i>
                                </a>
                                <a href="#" class="text-white">
                                    <i class="fa-solid fa-right-from-bracket text-success mx-2"></i>
                                </a>
                                <a href="#" class="text-white">
                                    <i class="fa-regular fa-trash-can text-success mx-2"></i>
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4 ">
                                    <div class="d-flex justify-content-center">
                                        <a href="#"><i class="fab fa-facebook-f fa-lg me-3 m-1"></i></a>
                                        <a href="#"><i class="fab fa-twitter text-info fa-lg me-3 m-2"></i></a>
                                        <a href="#"><i class="fab fa-instagram text-danger fa-lg"></i></a>
                                    </div>
                                    <h6 class="mt-4">Information</h6>
                                    <hr class="mt-0 mb-2">
                                    <form action="{{ route('UpdateSave', $all->id) }}" method="post">
                                        @csrf
                                        <div class="col-md-12">
                                            <span class="text-danger">
                                                @error('UpUser')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            <input type="text" name="UpUser" id="UpUser" value="{{ $all->UserName }}"
                                                class="form-control my-3">

                                        </div>
                                        <div class="col-md-12">
                                            <span class="text-danger">
                                                @error('UpContact')
                                                    {{ $message }}
                                                @enderror
                                            </span>

                                            <input type="text" name="UpContact" id="UpContact"
                                                value="{{ $all->ContactNo }}" class="form-control my-3">

                                        </div>
                                        <div class="row my-3">
                                            <div class="col-md-6">
                                                <a href="{{ route('profile') }}"
                                                    class="btn btn-outline-secondary w-100 px-2">Cancle</a>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="submit" value="Submit" class="btn btn-success w-100 px-2">
                                            </div>
                                        </div>
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
