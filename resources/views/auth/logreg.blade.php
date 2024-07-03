<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Registrasi IVOS</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/logreg.css') }}" />
</head>
<body>
    <div id="container">
        <!-- Cover Box -->
        <div id="cover" class="flex flex-col w-full gap-4 justify-evenly">
            <!-- Sign Up Section -->
            <!-- <h1>IVOS</h1> -->
            <img
                src="{{ asset('images/ivos.webp') }}"
                alt="ivos logo"
                class="w-24 mx-auto rounded-lg shadow-md hover:opacity-75 object-contain"
            />
            <a class="button sign-up mx-auto" href="#cover">Sign Up</a>
            <!-- Sign In Section -->
            <!-- <h1 class="sign-in">Welcome Back!</h1>
            <p class="sign-in">
                To keep connected with us please<br />
                login with your personal info
            </p>
            <br /> -->
            <a class="button sub sign-in mx-auto" href="#">Sign In</a>
        </div>
        <!-- Login Box -->
        <div id="login">
            <h1>Sign In</h1>

            <form method="POST" action="{{ route('acac.login') }}">
                @csrf <!-- Tambahkan ini untuk CSRF protection -->
                <input
                    type="text"
                    placeholder="username"
                    autocomplete="off"
                    name="username" 
                /><br />
                <input
                    type="password"
                    placeholder="Password"
                    autocomplete="off"
                    name="password" 
                /><br />
                <div class="flex justify-center my-2">
                    <a id="forgot-pass" href="{{ url('/reset') }}">Forgot your password?</a
                    ><br />
                </div>
                <button
                    type="submit"
                    class="flex justify-center items-center mt-4 mx-auto w-64 px-4 py-2 transition ease-in duration-200 uppercase rounded-sm bg-red-500 hover:bg-gray-800 text-white hover:text-white focus:outline-none"
                >
                    Login
                </button>
            </form>
        </div>
        <!-- Register Box -->
        <div id="register">
            <h1>Create Account</h1>

            <form method="POST" action="{{ route('acac.register') }}">
                @csrf <!-- Tambahkan ini untuk CSRF protection -->
                <input
                    type="text"
                    placeholder="Username"
                    autocomplete="off"
                    name="username" 
                /><br />
                <input
                    type="text"
                    placeholder="Full Name"
                    autocomplete="off"
                    name="fullName"
                /><br />
                <input
                    type="email"
                    placeholder="Email"
                    autocomplete="off"
                    name="email" 
                /><br />
                <input
                    type="password"
                    placeholder="Password"
                    autocomplete="off"
                    name="password"
                /><br />
                <button
                    type="submit"
                    class="flex justify-center items-center mt-4 mx-auto w-64 px-4 py-2 transition ease-in duration-200 uppercase rounded-sm bg-red-500 hover:bg-gray-800 text-white hover:text-white focus:outline-none"
                >
                    Register
                </button>
            </form>
        </div>
    </div>
    <!-- END Container -->
    <!-- partial -->
    @include('sweetalert::alert')
    
</body>
</html>
