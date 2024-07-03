<!DOCTYPE html>
<html lang="az">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script
            src="https://kit.fontawesome.com/64d58efce2.js"
            crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="{{ asset('css/regreg.css') }}" />
        <title>Registrasi IVOS</title>
    </head>

    <body>
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    
                    <form method="POST" class="sign-up-form" action="{{ route('acac.register') }}">
                        @csrf
                        <!-- <form action="php/daftar_proses.php" method="post" class="sign-up-form" enctype="multipart/form-data"> -->
                        <h2 class="title">Register</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input
                                required="required"
                                type="text"
                                name="username"
                                id="username"
                                placeholder="Username"
                            />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input
                                required="required"
                                type="text"
                                name="fullName"
                                id="nama_lengkap"
                                placeholder="Nama Lengkap"
                            />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input
                                required="required"
                                type="text"
                                name="email"
                                id="pekerjaan"
                                placeholder="Email"
                            />
                        </div>

                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input
                                required="required"
                                type="password"
                                name="password"
                                id="password"
                                placeholder="Password"
                            />
                        </div>

                        <input type="submit" value="Daftar" class="btn solid" />
                    </form>
                    <form method="POST" action="{{ route('acac.login') }}" class="sign-in-form">
                      @csrf
                      <img src="{{ asset('images/ivos.webp') }}" alt="logo" style="width: 110px;object-fit: contain;">
                      <h2 class="title">Login</h2>

                      <div class="input-field">
                          <i class="fas fa-user"></i>
                          <input
                              autocomplete="off"
                              autofocus
                              required="required"
                              type="text"
                              name="username"
                              id="username"
                              placeholder="Username"
                          />
                      </div>
                      <div class="input-field">
                          <i class="fas fa-lock"></i>
                          <input
                              autocomplete="off"
                              autofocus
                              required="required"
                              type="password"
                              name="password"
                              id="password"
                              placeholder="Password"
                          />
                      </div>
                      <div class="flex justify-center my-2">
                        <a id="forgot-pass" style="text-decoration: none; cursor: help;" href="{{ url('/reset') }}">Lupa password?</a
                        ><br />
                    </div>
                      <input type="submit" value="Masuk" class="btn solid" />
                  </form>
                </div>
            </div>

            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3 style="margin: 5px 0;">Belum memiliki Akun?</h3>
                        <button class="btn transparent" id="sign-up-btn">
                            Daftar
                        </button>
                    </div>
                    <img
                        src="https://bayuran.karangkates.desa.id/img/register.svg"
                        class="image"
                        alt="Register"
                    />
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3 style="margin: 5px 0;">Sudah Memiliki Akun?</h3>
                        <button class="btn transparent" id="sign-in-btn">
                            Masuk
                        </button>
                    </div>
                    <img
                        src="https://bayuran.karangkates.desa.id/img/login.svg"
                        class="image"
                        alt="Login"
                    />
                </div>
            </div>
        </div>
        @include('sweetalert::alert')
        <script src="{{ asset('js/regreg.js') }}"></script>
    </body>
</html>
