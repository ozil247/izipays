@extends('layouts.guest')

@section('content')
    <section class="register login">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-text center">
                        <h3 class="heading">Login To iziPays</h3>
                        <p class="desc fs-20">
                            Welcome back! Log In now to start trading
                        </p>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="flat-tabs">


                        <div class="content-tab">

                            <div class="content-inner">
                                <form method="POST" action="{{ route('login') }}"> @csrf

                                    @foreach ($errors->all() as $error)
                                        <p class="text-danger text-center">{{ $error }}</p>
                                    @endforeach

                                    <div class="form-group s1">
                                        <label>Email </label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Please enter a email." />
                                    </div>
                                    <div class="form-group s1">
                                        <label>Password </label>
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Please enter a password." />
                                    </div>

                                    <div class="form-group form-check">
                                        <div>
                                            <input type="checkbox" class="form-check-input" />
                                            <label class="form-check-label">Remember Me</label>
                                        </div>


                                        @if (Route::has('password.request'))
                                            <a class="text-muted" href="{{ route('password.request') }}">
                                                <p>Forgot password?</p>
                                            </a>
                                        @endif
                                    </div>

                                    <button type="submit" class="btn-action">Login</button>
                                    <div class="bottom">
                                        <p>Don't Have an account?</p>
                                        <a href="{{ route('register') }}">Register</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
