@extends('layout')
@section('contenu')


<div class="text-center">
    @if ($utilisateurs->mbBase == '')
    veuillez cliquez <a href="maj-mb" class="text-primary" >ici</a> pour calculer vos besoin calorique journalier
    @else
    Bonjour {{ $utilisateurs->pseudo}} vos besoin journalier sont de {{ $utilisateurs->mbBase}} calories
    @endif
    
    <form action="suivi" method="post">
        @csrf
        <label>Sélectionné une date:</label>
        <br>
        <input type="date" name="date" required>
        <br>
        <br>
        <label>Entre le nombres de calories mangez ce jour la:</label>
        <br>
        <input type="text" name="calories" maxlength="4" placeholder="Nombre de calories" required>
        <br>
        <br>
        <input type="submit" value="valider" class="btn btn-success mb-3" />
    </form>
</div>
<div class="text-center">
    @if ($calorie == '')
    <p>veuillez entrez les calorie ingurgité pour calculer votre moyenne calorique</p>
    @else
    <p>{{ $utilisateurs->pseudo}} vos besoin journalier sont de {{ $utilisateurs->mbBase}} calories vous avez en moyenne mangé {{round($calorie)}} calories par jour</p>
    @endif
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-6 tableOverflow">
            <table class="table table-success">
                <tbody>
                    @foreach($suivis as $suivi)
                    <tr>
                        <td>le {{ \Carbon\Carbon::parse($suivi->jour)->format('d/m/Y')}} vous avez mangé {{ $suivi->calorie}} calories
                            <form action="delete/{{ $suivi->id }}" onsubmit="return confirm('Etes-vous sur de votre choix ?');" method="post">@csrf
                                <input type="submit" value="Supprimer" class="btn btn-danger"/>
                            </form></td>
                            
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
                
            </div>
            <div class="col-md-12 col-lg-6">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
                <canvas id="myChart" width="400" height="400"></canvas>
                <script>
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                labels: [
                @foreach($suivis as $suivi)
                '{{\Carbon\Carbon::parse($suivi->jour)->format('d/m/Y')}}',
                @endforeach
                ],
                datasets: [{
                label: 'Calories',
                data: [
                
                @foreach($suivis as $suivi)
                '{{$suivi->calorie}}',
                @endforeach
                ],
                
                backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],

       
                
                }]
                },
                options: {
                scales: {
                yAxes: [{
                ticks: {
                beginAtZero: true
                }
                }]
                }
                }
                });
                </script>
            </div>
        </div>
    </div>
    
    @endsection