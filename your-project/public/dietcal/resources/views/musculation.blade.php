@extends('layout')
@section('contenu')
<div class="text-center">
    <p>Bonjour {{ $utilisateurs->pseudo}} veuillez entrez les exercices de musculation que vous avez fait:</p>
    <form action="musculation" method="post">
        @csrf
        <label>Sélectionné une date:</label>
        <br>
        <input type="date" name="date" required>
        <br>
        <br>
        <label>Entrez le nom de l'exercice:</label>
        <br>
        <input type="text" name="exercise" maxlength="20" placeholder="Exercise" required>
        <br>
        <br>
        <label>Entrez le nombre de répétition:</label>
        <br>
        <input type="text" name="repetition" maxlength="20" placeholder="Répetition" required>
        <br>
        <br>
        <label>Entrez le nombre de kilos:</label>
        <br>
        <input type="text" name="kilos" maxlength="10" placeholder="Kilos" required>
        <br>
        <br>
        <label>Entrez une note si besoin :</label>
        <br>
        <input type="text" name="note" placeholder="note personelle">
        <br>
        <br>
        <input type="submit" value="valider" class="btn btn-success mb-3" />
    </form>
</div>
<div class="col-md-12 tableOverflow">
    <table class="table table-success">
        <tbody>
            @foreach($musculations->sortByDesc('jour') as $musculation)
            <tr>
                <td>le {{ \Carbon\Carbon::parse($musculation->jour)->format('d/m/Y')}} vous avez fait <strong>{{ $musculation->repetition}}</strong> répétition en <strong>{{ $musculation->exercise}}</strong> avec un poids de <strong>{{ $musculation->kilos}}</strong> kilos
                    <br>
                    note: {{ $musculation->note}}
                    <form action="deletemusculation/{{ $musculation->id }}" onsubmit="return confirm('Etes-vous sur de votre choix ?');" method="post">@csrf
                        <input type="submit" value="Supprimer" class="btn btn-danger"/>
                    </form>
                </td>
                
            </tr>
            
            @endforeach
        </tbody>
    </table>
    
</div>
<!-- Pour voir le detail de chaque jours cliquez sur la date qui vous intéresse
@foreach($musculations->unique('jour') as $musculation)
{{ \Carbon\Carbon::parse($musculation->jour)->format('d/m/Y')}}
@endforeach -->
<div class="text-center mt-3">
    <p>Bonjour {{ $utilisateurs->pseudo}} veuillez entrez le cardio que vous avez fait:</p>
    <form action="cardio" method="post">
        @csrf
        <label>Sélectionné une date:</label>
        <br>
        <input type="date" name="date" required>
        <br>
        <br>
        <label>Durée du cardio en minute:</label>
        <br>
        <input type="text" name="cardio_temps" maxlength="3" placeholder="Durée cardio" required>
        <br>
        <br>
        <label>Nombres de calories dépensées:</label>
        <br>
        <input type="text" name="cardio_calories" maxlength="4" placeholder="Calories dépensées" required>
        <br>
        <br>
        <label>Entrez une note si besoin :</label>
        <br>
        <input type="text" name="note" placeholder="note personelle">
        <br>
        <br>
        <input type="submit" value="valider" class="btn btn-success mb-3" />
    </form>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-6 tableOverflow">
            <table class="table table-success">
                <tbody>
                    @foreach($cardios->sortByDesc('jour') as $cardio)
                    <tr>
                        <td>le {{ \Carbon\Carbon::parse($cardio->jour)->format('d/m/Y')}} vous avez fait {{ $cardio->cardio_temps   }} minutes et vous avez brûlé {{ $cardio->cardio_calories}} calories
                            <br>
                            note: {{ $cardio->note}}
                            <form action="deletecardio/{{ $cardio->id }}" onsubmit="return confirm('Etes-vous sur de votre choix ?');" method="post">@csrf
                                <input type="submit" value="Supprimer" class="btn btn-danger"/>
                            </form>
                        </td>
                        
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
          </div>
          <div class="col-md-12 col-lg-6">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
                <canvas id="myChart" width="400" height="400"></canvas>
                <script>
var ctx = document.getElementById("myChart").getContext("2d");

var data = {
    labels: [
        @foreach($cardios as $cardio)
                '{{\Carbon\Carbon::parse($cardio->jour)->format('d/m/Y')}}',
                @endforeach
    ],
    datasets: [
        {
            label: "Durée",
            backgroundColor: "blue",
            data: [
            @foreach($cardios as $cardio)
                '{{$cardio->cardio_temps}}',
                @endforeach
                ]
        },
        {
            label: "cardio",
            backgroundColor: "red",
            data: [
            @foreach($cardios as $cardio)
                '{{$cardio->cardio_calories}}',
                @endforeach
            ]
        },
       
    ]
};

var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
        barValueSpacing: 20,
        scales: {
            yAxes: [{
                ticks: {
                    min: 0,
                }
            }]
        }
    }
});
</script>

    </div>
</div>
@endsection