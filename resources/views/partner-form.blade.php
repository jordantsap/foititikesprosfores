@extends('layouts.public')

@section('content')
    <div id="partners">

        <div class="container">
            <div class="row">
                <div class="mx-auto">
                    <h1 class="partners-header text-center">Γίνε Συνεργάτης</h1>
                </div>
                <h2 class="mb-4">
                    Έχετε e-shop? Ακόμα και αν δεν έχετε όμως, το ερώτημα είναι ένα: Θέλετε να κάνετε γνωστό το κατάστημα
                    σας σε περισσότερο κόσμο και να αυξήσετε τις πωλήσεις σας; Αν η απάντηση είναι «ναι», σας έχουμε την
                    ιδανική λύση. Συμπληρώστε τη φόρμα παρακάτω και κάντε το επόμενο βήμα για την επιχείρηση σας.
                </h2>
                <a href="#partner-request-form" type="button" class="mb-5 btn btn-success active" id="partner_link">
                    <h3>ΘΕΛΩ ΝΑ ΓΙΝΩ ΣΥΝΕΡΓΑΤΗΣ</h3>
                </a>
                <h4 class="mb-5">
                    <b>Γιατί να γίνετε μέλος της δεμένης μας οικογένειας;</b>
                </h4>
                <h5>
                    <ol class="list-group list-group-numbered mb-2">
                        <li class="list-group-item">Στοχευμένη προβολή της επιχείρησης και των προϊόντων σας</li>
                        <li class="list-group-item">Προσέλκυση νέων πελατών και εγγυημένη αύξηση των πωλήσεων</li>
                        {{-- <li class="list-group-item">Πρόσβαση σε στατιστικά και προηγμένα εργαλεία που θα σας βοηθήσουν να
                            διαχειριστείτε πιο αποτελεσματικά την προβολή της επιχείρησης σας</li> --}}
                        <li class="list-group-item">Ενίσχυση της αναγνωρισιμότητας του brand σας και αύξηση της αξιοπιστίας
                            σας</li>
                    </ol>
                </h5>
                <h5>
                    Στο foititikesprosfores.gr συμμετέχουν ηλεκτρονικά και φυσικά καταστήματα είτε συνοικιακά, είτε μεγάλες
                    αλυσίδες. Εσείς θα μείνετε εκτός;
                </h5>
                <a class="btn btn-success mb-1" href="{{ url('partner-list') }}" role="button">
                    ΔΕΙΤΕ ΤΗ ΛΙΣΤΑ ΣΥΝΕΡΓΑΤΩΝ ΜΑΣ
                </a>
                <div id="partner-request-form">

                    <div class="mb-5 mt-5">

                        <div class="mx-auto">
                            <h4 class="partners-request-form-header text-center">ΦΟΡΜΑ ΕΝΔΙΑΦΕΡΟΝΤΟΣ</h4>
                        </div>
                        {{-- @include('auth.register') --}}

                        <h5 class="partners-request-form-header text-center">{{ __('Δημιουργήστε την επιχείρηση σας παρακάτω') }}</h5>

                        <form class="row g-3" action="{{ route('partner.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-12{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="form-label">Ονομασία Επιχείρησης</label>
                                @if ($errors->has('title'))
                                    <strong class="text-danger">{{ $errors->first('title') }}</strong>
                                @endif
                                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}"
                                    placeholder="π.χ. Φοιτητικές προσφορές Α.Ε." required>
                            </div>

                            <div class="col-6{{ $errors->has('manager') ? ' has-error' : '' }}">
                                <label for="manager" class="form-label">Υπεύθυνος Επικοινωνίας</label>
                                @if ($errors->has('manager'))
                                    <strong class="text-danger">{{ $errors->first('manager') }}</strong>
                                @endif
                                <input type="text" class="form-control" name="manager" id="manager"
                                    value="{{ old('manager') }}" placeholder="π.χ. Ελευθέριος Κωνσταντίνου" required>
                            </div>

                            <div class="col-6{{ $errors->has('area') ? ' has-error' : '' }}">
                                <label for="area" class="form-label">Περιοχή</label>
                                @if ($errors->has('area'))
                                    <strong class="text-danger">{{ $errors->first('area') }}</strong>
                                @endif
                                <input type="text" class="form-control" id="area" name="area"
                                    placeholder="π.χ. Περιοχή Αεροδρομείου" value="{{ old('area') }}" required>
                            </div>

                            <div class="col-6{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="form-label">{{ __('Email Χρήσης του Συστήματος') }}</label>
                                @if ($errors->has('email'))
                                    <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                @endif
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="π.χ. info@foititikesprosfores.gr" value="{{ old('email') }}" required>
                            </div>
                            <div class="col-6{{ $errors->has('url') ? ' has-error' : '' }}">
                                <label for="url" class="form-label">E-Shop Url</label>
                                @if ($errors->has('url'))
                                    <strong class="text-danger">{{ $errors->first('url') }}</strong>
                                @endif
                                <input type="text" class="form-control" name="url" id="url"
                                    placeholder="π.χ. http(s)://foititikesprosfores.gr" value="{{ old('url') }}"
                                    required>
                            </div>

                            <div class="col-6{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="form-label">Κωδικός εισόδου</label>
                                @if ($errors->has('password'))
                                    <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                @endif
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="col-6">
                                <label for="password-confirm" class="form-label">{{ __('Επιβεβαίωση κωδικού') }}</label>

                                <div class="">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="col-4{{ $errors->has('telephone') ? ' has-error' : '' }}">
                                <label for="phone" class="form-label">Τηλέφωνο Επικοινωνίας</label>
                                @if ($errors->has('telephone'))
                                    <strong class="text-danger">{{ $errors->first('telephone') }}</strong>
                                @endif
                                <input type="text" class="form-control" name="telephone" id="telephone"
                                    placeholder="π.χ. 2102345675" value="{{ old('telephone') }}" required>
                            </div>

                            <div class="col-4{{ $errors->has('afm') ? ' has-error' : '' }}">
                                <label for="afm" class="form-label">ΑΦΜ Επιχείρησης</label>
                                @if ($errors->has('afm'))
                                    <strong class="text-danger">{{ $errors->first('afm') }}</strong>
                                @endif
                                <input type="text" class="form-control" id="afm" name="afm" placeholder="π.χ. 64667890543"
                                    value="{{ old('afm') }}" required>
                            </div>

                            <div class="col-4 {{ $errors->has('category_id') ? ' has-error' : '' }}">
                                <label for="category_id" class="form-label">Κατηγορία Καταστήματος</label>
                                @if ($errors->has('category_id'))
                                    <strong class="text-danger">{{ $errors->first('category_id') }}</strong>
                                @endif
                                <select id="category_id" value="{{ old('category_id') }}" name="category_id"
                                    class="form-control" required>
                                    <option value="">Κατηγορία Καταστήματος</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="image">Image</label>
                                <div class="d-flex justify-content-end">
                                    <img id="image" width="50%" max-height="200px">
                                </div>
                                <div class="d-flex justify-content-start">
                                <input type="file" accept="image/*" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                                    id="image" name="image" value="{{ old('image') }}" required>
                                </div>
                                {{-- <script>
                                    function imageinput() {

                                        var x = document.getElementById("image").style.block = "none";
                                        if (x.style.display === "none") {
                                            x.style.display = "block";
                                        } else {
                                            x.style.display = "none";
                                        }
                                    }
                                </script> --}}
                                @if ($errors->has('image'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Αποθήκευση και Αποστολή Στοιχείων
                                    Καταστήματος</button>
                            </div>
                            @include('partials.alerts')
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection
