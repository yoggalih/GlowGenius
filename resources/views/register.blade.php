<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}"> <!-- Ganti dengan file CSS biasa -->
</head>

<body class="body">

    <!-- Centering the form on the screen -->
    <div class="form-container">
        <div class="form-box">
            
            <!-- Heading -->
            <div class="text-center mb-8">
                <h1 class="heading">Create an Account</h1>
                <p class="subheading">Please fill in the details below to create your account.</p>
            </div>

            <!-- Registration Form -->
            <form method="POST" action="{{ route('register') }}" class="form-fields">
                @csrf

                <!-- Name Field -->
                <div class="form-group">
                    <label for="name" class="form-label">{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-input"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email Field -->
                <div class="form-group">
                    <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-input"
                        name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="form-group">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-input"
                        name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Confirm Password Field -->
                <div class="form-group">
                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-input"
                        name="password_confirmation" required autocomplete="new-password">
                </div>

                <!-- Submit Button -->
                <div class="submit-container">
                    <button type="submit" class="submit-button">
                        {{ __('Register') }}
                    </button>
                </div>

                <!-- Link to Login -->
                <div class="login-buttons">
                    <a href="{{ route('login') }}" class="login-button">
                        {{ __('Already have an account? Login') }}
                    </a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
