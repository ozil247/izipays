@extends('layouts.guest')

@section('content')
    <section class="register">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-text center">
                        <h3 class="heading">Register To Izipays</h3>
                        <p class="desc fs-20">
                            Register in advance and enjoy the event benefits
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="flat-tabs">


                        <div class="content-tab">
                            <div class="content-inner">
                                <form method="POST" action="{{ route('register') }}"> @csrf

                                    @foreach ($errors->all() as $error)
                                        <p class="text-danger text-center">{{ $error }}</p>
                                    @endforeach


                                    <div class="form-group">
                                        <label>Email
                                            <span class="fs-14"></span></label>
                                        <input name="email" type="email" class="form-control" placeholder="Enter Email" />
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input name="name" type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Name." />
                                    </div>



                                    <div class="form-group">
                                        <label>Phone
                                            <span class="fs-14"></span></label>
                                        <input name="phone" type="number" class="form-control" placeholder="Enter Phone Number" />
                                    </div>

                                    <div class="form-group">
                                        <label>Password </label>
                                        <input name="password" type="password" class="form-control" placeholder="Enter Password." />
                                    </div>

                                    <div class="form-group">
                                        <label> Confirm Password </label>
                                        <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password." />
                                    </div>

                                    <button type="submit" class="btn-action">
                                        Register
                                    </button>
                                    <div class="bottom">
                                        <p>Already have an account?</p>
                                        <a href="{{ route('login') }}">Login</a>
                                    </div>
                                </form>
                            </div>
                            <div class="content-inner">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
