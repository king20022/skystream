{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sky Stream Exchange</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="logobroker.png" />
    <!-- Custom Stylesheet -->

    <link rel="stylesheet" href="/email/css/style.css" />
  </head>

  <body class="@@dashboard">


<div id="preloader"><i>.</i><i>.</i><i>.</i></div>


<div id="main-wrapper">

    <div class="authincation section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-4 col-md-5">
                    <div class="mini-logo text-center my-3">
                        <a href="{{ route ('welcome')}}"><img src="logobroker.png" alt=""></a>
                        <h4 class="card-title mt-5">Reset Password</h4>
                    </div>
                    <div>
                        @foreach ($errors->all() as $err)
                            <label for="edit page"></label>
                            <p class="text-danger text-center">{{ $err }}</p>
                        @endforeach
                    </div>
                    <div class="auth-form card">
                        <div class="card-body">
                            <form action="{{ route('password.email') }}" class="row g-3" method="POST">@csrf
                                <div class="col-12">
                                    <label class="form-label">Email</label>

                                    <input  class="form-control" type="email" name="email" id="email"  :value="old('email')" required autofocus  placeholder="***********">
                                </div>
                                <div class="text-center mt-4">
                                    <button  class="btn btn-primary btn-block">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<script src="/email/vendor/jquery/jquery.min.js"></script>
<script src="/email/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


















<script src="/email/js/scripts.js"></script>


</body>


</html>



