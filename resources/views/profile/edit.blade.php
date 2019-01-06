@extends('layouts.frontend')

@section('content')


    <div class="container" style="margin-bottom: 1em;">
    <form method="POST" action="{{ route('profile.update') }}">
        @csrf


        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif



            <div class="form-group row">
            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Voornaam') }}</label>

            <div class="col-md-6">
                <input id="firstname" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="firstname" value="{{ $user->firstname}}" required autofocus>

                @if ($errors->has('firstname'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Achternaam') }}</label>

            <div class="col-md-6">
                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ $user->lastname}}" required autofocus>

                @if ($errors->has('lastname'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="mobilephone" class="col-md-4 col-form-label text-md-right">{{ __('Gsmnr.') }}</label>

            <div class="col-md-6">
                <input id="mobilephone" type="text" class="form-control{{ $errors->has('mobilephone') ? ' is-invalid' : '' }}" name="mobilephone" value="{{ $user->mobilephone }}" required autofocus>

                @if ($errors->has('mobilephone'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobilephone') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="streetname" class="col-md-4 col-form-label text-md-right">{{ __('Straat & Nummer') }}</label>

            <div class="col-md-4">
                <input id="streetname" type="text" class="form-control{{ $errors->has('streetname') ? ' is-invalid' : '' }}" name="streetname" value="{{ $user->address->straatNaam}}" required autofocus>

                @if ($errors->has('streetname'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('streetname') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="col-md-2">
                <input id="housenumber" type="text" class="form-control{{ $errors->has('housenumber') ? ' is-invalid' : '' }}" name="housenumber" value="{{ $user->address->nummer }}" required autofocus>

                @if ($errors->has('housenumber'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('housenumber') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="postalcode" class="col-md-4 col-form-label text-md-right">{{ __('Postcode') }}</label>

            <div class="col-md-6">
                <input id="postalcode" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="postalcode" value="{{ $user->address->postcode }}" required autofocus>

                @if ($errors->has('postalcode'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('postalcode') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Stad') }}</label>

            <div class="col-md-6">
                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ $user->address->stad }}" required autofocus>

                @if ($errors->has('city'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Land') }}</label>

            <div class="col-md-6">
                <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ $user->address->land }}" required autofocus>

                @if ($errors->has('country'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                @endif
            </div>
        </div>



        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email}}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Wachtwoord') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password">


            </div>
        </div>



        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-success">
                    {{ __('Wijzigen opslaan') }}
                </button>
            </div>
        </div>
    </form>

    </div>

@endsection