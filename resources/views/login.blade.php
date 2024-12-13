<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}"> <!-- Mengarah ke file CSS eksternal -->
</head>

<body class="body">

    <!-- Centering the form on the screen -->
    <div class="form-container">
        <div class="form-box">
            
            <!-- Heading -->
            <div class="text-center mb-8">
                <h1 class="heading">Login to Your Account</h1>
                <p class="subheading">Please fill in the details below to log in.</p>
            </div>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}" class="form-fields">
                @csrf

                <!-- Email Field -->
                <div class="form-group">
                    <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-input @error('email') is-invalid @enderror" 
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="form-group">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" 
                        name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember Me Checkbox -->
                <div class="form-group row">
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

                <!-- Submit Button -->
                <div class="submit-container">
                    <button type="submit" class="submit-button">
                        {{ __('Login') }}
                    </button>
                </div>

            </form>
        </div>
    </div>

</body>

</html>
