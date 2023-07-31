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
                                <h5 class="text-dark ml-3">{{$alldata->UserName}}</h5>
                                <p class="text-dark ml-3" style="font-size: .85rem!important">{{$alldata->Email}}</p>
                                <a href="{{route('update')}}" class="text-white">
                                    <i class="far fa-edit mb-5 text-success mx-2"></i>
                                </a>
                                <a href="{{route('Logout')}}" class="text-white">
                                    <i class="fa-solid fa-right-from-bracket text-success mx-2"></i>
                                </a>
                                <a href="{{route('delete',$alldata->id)}}" class="text-white">
                                    <i class="fa-regular fa-trash-can text-success mx-2"></i>
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6 class="pt-4">Information</h6>
                                    <hr class="mt-0 mb-2">

                                    <div class="col-12 mb-3">
                                        <h6>User Name</h6>
                                        <p mailto:class="text-muted">{{$alldata->UserName}}</p>
                                    </div>
                                    <hr class="mt-0 mb-1">
                                    <div class="col-12 mb-3">
                                        <h6>Contact No</h6>
                                        <p class="text-muted">{{$alldata->ContactNo}}</p>
                                    </div>
                                    <hr class="mt-0 mb-1">
                                    <div class="d-flex justify-content-start">
                                        <a href="#"><i class="fab fa-facebook-f fa-lg me-3 m-1"></i></a>
                                        <a href="#"><i class="fab fa-twitter text-info fa-lg me-3 m-2"></i></a>
                                        <a href="#"><i class="fab fa-instagram text-danger fa-lg"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
