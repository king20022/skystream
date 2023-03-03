<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
<!DOCTYPE html>
<html lang="en">
  <meta
    http-equiv="content-type"
    content="text/html;charset=utf-8"
  /><!-- /Added by HTTrack -->
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tende</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logoi.png" />
    <!-- Custom Stylesheet -->

    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body class="@@dashboard">
    <div id="preloader"><i>.</i><i>.</i><i>.</i></div>

    <div id="main-wrapper">
      <div class="verification section-padding">
        <div class="container h-100">
          <div class="row justify-content-center h-100 align-items-center">
            <div class="col-xl-5 col-md-6">
              <div class="mini-logo text-center my-4">
                <a href="index.html"><img src="images/logo.png" alt="" /></a>
                <h4 class="card-title mt-5">Verify your Email</h4>
              </div>
              <div class="auth-form card">
                <div class="card-body">
                  <form
                    action="https://tende.vercel.app/verify-step-2.html"
                    class="identity-upload"
                  >
                    <div class="identity-content">
                      <span class="icon"><i class="icofont-email"></i></span>
                      <p>
                        We sent verification email to
                        <strong class="text-dark">example@email.com</strong>.
                        Click the link inside to get started!
                      </p>
                      <a href="index.html">Go to Dashboard</a>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center">
                  <a href="signup.html">Email didn't arrive?</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="js/scripts.js"></script>
  </body>


</html>

