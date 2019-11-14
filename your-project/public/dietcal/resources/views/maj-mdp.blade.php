@extends('layout')
@section('contenu')
<div class="text-center">
    <form class="section" action="modification-mot-de-passe" method="post">
        @csrf
        <div class="field">
            <label class="label">Nouveau mot de passe</label>
            <div class="control">
                <input class="input" type="password" name="password">
            </div>
            @if($errors->has('password'))
            <p class="help is-danger">{{ $errors->first('password') }}</p>
            @endif
        </div>
        <div class="field">
            <label class="label">Mot de passe (confirmation)</label>
            <div class="control">
                <input class="input" type="password" name="password_confirmation">
            </div>
            @if($errors->has('password_confirmation'))
            <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
            @endif
        </div>
        <div class="field mb-3 mt-2">
            <div class="control">
                <button class="btn btn-success" type="submit">Modifier mon mot de passe</button>
            </div>
        </div>
    </form>
</div>
@endsection