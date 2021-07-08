<div class="card">
    <div class="card-header text-center">{{ __('Συμπληρώστε τα Στοιχεία Εισόδου του Χρήστη στη πλατφόρμα') }}</div>

    <div class="card-body">
        <form method="POST" action="{{ url('register') }}">
            @csrf

            <div class="row">
                <div class="col-6 mb-1">
                    <label for="username" class="col-form-label">{{ __('Όνομα Χρήστη') }}</label>

                    <div class="">
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-6 mb-1">
                    <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6 mb-1">
                    <label for="password" class="col-form-label text-md-right">{{ __('Κωδικός εισόδου στο σύστημα') }}</label>

                    <div class="">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-6 mb-1">
                    <label for="password-confirm" class="col-form-label text-md-right">{{ __('Επιβεβαίωση κωδικού') }}</label>

                    <div class="">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <div class="form-group row">
                <div class="col-md-6 d-grid gap-2">
                    <button type="submit" class="btn btn-success">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
