@include('partials.head')
@include('partials.header')


<div id="contactus">

    <div class="container">
        <div class="row">
            <div class="mx-auto">
                <h1 class="home-products-header text-center">Επικοινωνία</h1>
            </div>
            <div class="col-sm-12">
                <form action="{{ route('postcontact') }}" method="POST">
                    @csrf
                    <div class="mb-3 {{ $errors->has('firstname') ? ' has-error' : '' }}">
                        <label for="firstname" class="form-label">Όνομα</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname')}}" placeholder="Όνομα">
                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                        @endif
                    </div>
                    <div class="mb-3 {{ $errors->has('lastname') ? ' has-error' : '' }}">
                        <label for="lastname" class="form-label">Επίθετο</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname')}}" placeholder="Επίθετο">
                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                        @endif
                    </div>
                    <div class="mb-3 {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="Email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email')}}"placeholder="Διεύθυνση Ηλ. Ταχυδρομείου">
                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                        <div id="emailHelp" class="form-text">Δε δίνουμε πουθενά το email σας.</div>
                    </div>
                    <div class="mb-3 {{ $errors->has('subject') ? ' has-error' : '' }}">
                        <label for="subject" class="form-label">Θέμα</label>
                        <input type="text" value="{{ old('subject')}}" class="form-control" id="subject" name="subject" placeholder="Θέμα μυνήματος">
                    </div>
                    <div class="mb-3 {{ $errors->has('message') ? ' has-error' : '' }}">
                        <label for="message" class="form-label">Μύνημα</label>
                        <textarea class="form-control" name="message" id="message" rows="5">
                            {{ old('message')}}
                        </textarea>
                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                    </div>

                    @include('partials.alerts')

                <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-block">Αποστολή μυνήματος</button>
                </div>

                </form>
            </div>
        </div>
    </div>

</div>

@include("partials.footer")
