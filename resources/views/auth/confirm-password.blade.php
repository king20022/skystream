{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
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
                        <a href="#"><img src="logobroker.png" alt=""></a>
                        <h4 class="card-title mt-5">This is a secure area of the application. Please confirm your password before continuing.</h4>
                    </div>
                    <div>
                        @foreach ($errors->all() as $err)
                            <label for="edit page"></label>
                            <p class="text-danger text-center">{{ $err }}</p>
                        @endforeach
                    </div>
                    <div class="auth-form card">
                        <div class="card-body">
                            <form action="{{ route('password.confirm') }}" class="row g-3" method="POST">@csrf
                                <div class="col-12">
                                    <label class="form-label">Password</label>

                                    <input  class="form-control" type="password" name="password" id="password"    required autocomplete="current-password">
                                </div>

                                <div class="text-center mt-4">
                                    <button  class="btn btn-primary btn-block">Confirm</button>
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
