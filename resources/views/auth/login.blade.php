<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta property="og:site_name" content="https://himafhunpam.com/login">
    <meta property="og:title" content="Login HIMA FH UNPAM" />
    <meta property="og:description" content="Himpunan Mahasiswa Fakultas Hukum Universitas Pamulang 2022" />
    <Meta Content='Himpunan Mahasiswa Hukum Universitas Pamulang' Name='description'/>
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image">
    <!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:image" content="https://himafhunpam.com/logo_hima.jpg">
    <meta property="og:image" itemprop="image" content="https://himafhunpam.com/logo_hima.jpg">
    <meta property="og:updated_time" content="1440432930" />
    <title>Login HIMA FH</title>
    <!-- Favicons -->
    <link href="{{ asset('NiceAdmin/assets/img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('frontend/home/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <link rel="stylesheet" href="{{ asset('frontend/login/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/login/scss/style.css') }}" />

</head>

<body>
    <link itemprop="thumbnailUrl" href="url_gambar"> <span itemprop="thumbnail" itemscope itemtype="https://himafhunpam.com/logo_hima.jpg"> 
        <link itemprop="url" href="https://himafhunpam.com/logo_hima.jpg"> </span>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="../../images/law.png" alt="Image" class="img-fluid" />
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center needs-validation">
                        <div class="col-md-8">
                            <div class="mb-4 images">
                                <img src="../../images/logo.png" class="tengah" />
                                <br />
                                <h3 class="deskripsi text-center">Login</h3>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <h5>&nbsp; NIM</h5>
                                <div class="form-group first mb-3">
                                    <input id="username" type="text"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        value="{{ old('username') }}" placeholder="Masukan nim anda" required
                                        autocomplete="username" autofocus>
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Login gagal email atau password salah</strong>
                                        </span>
                                    @enderror
                                </div>
                                <h5>&nbsp; Password</h5>
                                <div class="form-group last mb-4">
                                    <input type="password" placeholder="Password" class="form-control" id="password"
                                        name="password" required autocomplete="current-password" />

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

{{-- @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="username" class="col-md-4 col-form-label text-md-end">Nim</label>

                                <div class="col-md-6">
                                    <input id="username" type="text"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
