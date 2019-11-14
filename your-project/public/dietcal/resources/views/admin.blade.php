@extends('layout')
@section('contenu')


		            <table class="table table-success">
                <tbody>
                    @foreach($utilisateurs as $utilisateur)
                    <tr>
                        <td>{{ $utilisateur->pseudo}}
                            <form onsubmit="return confirm('Etes-vous sur de votre choix ?');" action="admin/{{ $utilisateur->id }}" method="post">@csrf
                                <input type="submit" value="Supprimer" class="btn btn-danger"/>
                            </form></td>
                            
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
@endsection