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
<html lang="eng">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="keywords" content="make money online, portfolio management stock, forex, cryptocurrency">
    <meta name="author" content="VitalityCryptos">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#FCB42D" />
    <!-- Site Properties -->
    <title>Password reset - VitalityCryptos</title>
    <!-- critical preload -->
    <link rel="preload" href="/js/vendors/uikit.min.js" as="script">
    <link rel="preload" href="/css/vendors/uikit.min.css" as="style">
    <link rel="preload" href="/css/style.css" as="style">
    <!-- icon preload -->
    <link rel="preload" href="/fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <!-- font preload -->
    <link rel="preload" href="/fonts/archivo-v9-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/archivo-v9-latin-300.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/archivo-v9-latin-700.woff2" as="font" type="font/woff2" crossorigin>
    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="favicon.html" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="/apple-touch-icon.html">
    <!-- css -->
    <link rel="stylesheet" href="/css/vendors/uikit.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    <main>
        <!-- section content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-container uk-container-expand">
                <div class="uk-grid" data-uk-height-viewport="expand: true">
                    <div class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge"
                        style="background-image: url(../img/in-signin-image.jpg);">
                    </div>
                    <div class="uk-width-expand@m uk-flex uk-flex-middle">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-3-5@m">
                                <div class="uk-text-center in-padding-horizontal@s">
                                    <!-- logo begin -->
                                    <a class="uk-logo" href="../index.html">
                                        <img src="images/vitalitycryptos.html" data-src="images/vitalitycryptos.png"
                                            alt="logo" width="146" height="39" data-uk-img>
                                    </a>
                                    <!-- logo end -->
                                    <p class="uk-text-lead uk-margin-small-top uk-margin-medium-bottom">
                                    </p>

                                    <!-- login form begin -->
                                    <form class="uk-grid uk-form" method="POST"
                                        action="{{ route('password.email') }}">@csrf

                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-envelope fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" name="email" id="email"
                                                type="email" placeholder="Email Address" value="" required
                                                autofocus>
                                        </div>
                                        <div class="uk-margin-small uk-width-expand uk-text-small">
                                            <label class="uk-align-right uk-margin-small-left"><a class="uk-link-reset"
                                                    href="{{ route('login') }}">Go back to login?</a></label>
                                        </div>
                                        <div class="uk-margin-small uk-width-1-1">
                                            <button
                                                class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left"
                                                >Send Password Reset Link</button>
                                        </div>
                                    </form>
                                    <!-- login form end -->
                                    <p style="display: none;" class="uk-heading-line"><span>Or login with</span></p>
                                    <div style="display: none;" class="uk-margin-medium-bottom">
                                        <a class="uk-button uk-button-small uk-border-rounded in-brand-google"
                                            href="#"><i
                                                class="fab fa-google uk-margin-small-right"></i>Google</a>
                                        <a class="uk-button uk-button-small uk-border-rounded in-brand-facebook"
                                            href="#"><i
                                                class="fab fa-facebook-f uk-margin-small-right"></i>Facebook</a>
                                    </div>
                                    <span class="uk-text-small">Forgot Email? <a class="uk-button uk-button-text"
                                            href="../contact.html">Contact Support</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
    <!-- javascript -->
    <script src="/js/vendors/uikit.min.js"></script>
    <script src="/js/vendors/utilities.min.js"></script>
    <script src="/js/config-theme.js"></script>
</body>