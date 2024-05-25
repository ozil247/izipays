@extends('layouts.guest')

@section('content')
    <section class="register login">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-text center">

                        <p class="desc fs-20">
                            Forgot your password? No problem. Just let us know your email address and <br> we will email you
                            a password reset link that will allow you to choose a new one.
                        </p>

                    </div>
                </div>


              
                <div class="col-md-12">
                    <div class="flat-tabs">


                        <div class="content-tab">


                            <div class="content-inner">
                                <form method="POST" action="{{ route('password.email') }}"> @csrf

                                    @foreach ($errors->all() as $error)
                                        <p class="text-danger text-center">{{ $error }}</p>
                                    @endforeach

                                    <div class="form-group s1">
                                        <label>Email </label>
                                        <input type="email" name="email" :value="old('email')" class="form-control"
                                            placeholder="Please enter a email." />
                                    </div>


                                    <button type="submit" class="btn-action">Email Password Reset Link</button>

                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
