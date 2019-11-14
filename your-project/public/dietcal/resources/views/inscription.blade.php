@extends('layout')
@section('contenu') 
<div class="text-center">
			<form action="" method="post">
            {{ csrf_field() }}

            <label>Entrez votre pseudo: </label><p><input type="text" name="pseudo" placeholder="Pseudo" value="{{old('pseudo') }}"></p>
            @if ($errors->has('pseudo'))
                  <p>{{ $errors->first('pseudo') }}</p>
            @endif

            <label>Entrez votre email: </label><p><input type="email" name="email" placeholder="Email" value="{{old('email') }}"></p>
            @if ($errors->has('email'))
                  <p>{{ $errors->first('email') }}</p>
            @endif

            <label>Entrez votre password: </label><p><input type="password" name="password" placeholder="Password"></p>
            @if ($errors->has('password'))
                  <p>{{ $errors->first('password') }}</p>
            @endif

            <label>Confirmez votre password: </label><p><input type="password" name="password_confirmation" placeholder="Password confirmation"></p>
            @if ($errors->has('password_confirmation'))
                  <p>{{ $errors->first('password_confirmation') }}</p>
            @endif
            
            <input type="submit" value="valider" class="btn btn-success mb-3 mt-2" />

<!--             <label>Entrez votre date de n'aissance: </label><input type="date" id="start" name="date_birth" min="1900-01-01" max="2019-01-01" required>
            <label>Entrez votre poid: </label><input type="text" name="weight" maxlength="3" placeholder="Poid" required/>
            <label>Entrez votre taille (en cm):</label> <input type="text" name="height" maxlength="3" placeholder="Taille" required/>
            <label>Entrez votre age:</label> <input type="text" name="age" maxlength="3" placeholder="Age" required/>
            <input type="submit" value="valider" />
 -->

		</form>
            </div>
@endsection