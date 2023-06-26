@extends('layouts.auth')

@section('content')
    <!-- Main Content Starts -->
    <main class="container flex-grow p-4 sm:p-6">
        <div class="card mx-auto w-full max-w-md">
            <div class="card-body px-10 py-12">
                <div class="flex flex-col items-center justify-center">
                    <img src="{{ asset('images/logo-konstruksi.png') }}" alt="logo" class="h-[50px]" />
                    <h5 class="mt-4">Welcome Back</h5>
                    <p class="text-sm text-slate-500 dark:text-slate-400">Please enter your details</p>
                </div>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mt-6 flex flex-col gap-5">
                        <!-- Email -->
                        <div>
                            <label class="label mb-1">Email</label>
                            <input type="email" name="email" class="input" placeholder="Enter Your Email"
                                value="{{ old('email') }}" />
                        </div>
                        <!-- Password-->
                        <div class="">
                            <label class="label mb-1">Password</label>
                            <input type="password" name="password" class="input" placeholder="Password" />
                        </div>
                    </div>
                    <!-- Remember & Forgot-->
                    <div class="mt-2 flex items-center justify-between">
                        <div class="flex items-center gap-1.5">
                            <input type="checkbox"
                                class="h-4 w-4 rounded border-slate-300 bg-transparent text-primary-500 shadow-sm transition-all duration-150 checked:hover:shadow-none focus:ring-0 focus:ring-offset-0 enabled:hover:shadow disabled:cursor-not-allowed disabled:opacity-50 dark:border-slate-600"
                                id="remember-me" />
                            <label for="remember-me" class="label">Remember Me</label>
                        </div>
                        <a href="#" class="text-sm text-primary-500 hover:underline">Forgot Password</a>
                    </div>
                    <!-- Login Button -->
                    <div class="mt-8">
                        <button type="submit" class="btn btn-primary w-full py-2.5">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- Main Content Ends -->
@endsection
