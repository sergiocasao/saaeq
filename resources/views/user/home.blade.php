@extends('layouts.app')

@section('content')

<div style="padding: 200px 0;background-image: url('http://4.bp.blogspot.com/-p5bRZBzJDJg/T4O_Q2I8n-I/AAAAAAAACuw/FpTlx07Wlf8/s1600/Nano+Wallpaper.jpeg'); color: white;background-size: cover;background-position: center;position: relative;min-height: calc( 100% - 60px );margin-top: -40px;">
    <div style="height: 100%;width: 100%;background-color: rgba(0,0,0,0.6);position: absolute;top: 0;"></div>
</div>

<div class="container" style="margin-top: -220px;margin-bottom: 50px;">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">

                <div class="panel-heading">Tu cuenta</div>

                <div class="panel-body">
                    <h4>Información personal:</h4>

                    <strong>Nombre:</strong> <span style="text-transform: capitalize;">{{ Auth::user()->name }}</span><br>
                    <strong>Email: </strong> {{ Auth::user()->email }} <br>
                    <strong>Contraseña:</strong> {{ '*****************' }} <br>

                    <br>

                    <a href="{{ route('user::edit', Auth::user()->slug ) }}">Editar perfil</a>

                    <hr>

                    <h4>Sobre tu aprendizaje:</h4>

                    <strong>Tipos de aprendizaje</strong> <br><br>

                    @if (!Auth::user()->test_finished)
                        Aún no has realizado el test para obtener tus tipos de aprendizaje, realizalo <a href="{{ route('user::test.index', Auth::user()->slug ) }}">aquí</a>.
                    @else
                        <strong>Procesamiento:  </strong>   {{ Auth::user()->processing_learn_type->name }} <br>
                        <strong>Procesamiento:  </strong>   {{ Auth::user()->perception_learn_type->name }} <br>
                        <strong>Representacion: </strong>   {{ Auth::user()->representation_learn_type->name }} <br>
                        <strong>Comprensión:    </strong>   {{ Auth::user()->comprenhention_learn_type->name }} <br>
                    @endif

                    <hr>

                    <h4>Tus últimos exámenes:</h4>

                    <strong>Exámenes</strong> <br><br>

                    @if (Auth::user()->exams->count() > 0)

                        @foreach (Auth::user()->exams()->orderBy('pivot_created_at', 'desc')->take(10)->get() as $exam)
                            <p class="pull-right">Calificación: <strong>{{ $exam->pivot->qualification }}</strong></p>
                            <p>{{ $exam->label }} - {{ $exam->pivot->created_at->format('d F y @ H:i ') }}</p>
                        @endforeach

                        <br><br>

                    @else
                        <p>Aún no has realizado ningún exámen</p>
                    @endif

                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="/js/chart.js" charset="utf-8"></script>
    <script>
    	var ctx = document.getElementById("chart1");
    	var calif= [7,8,9,10,8,6,9,10,10,8,10,8,6,7];
    	var data = {
    	        labels: ["Tabla periódica y su uso", "Compuestos y elementos", "Modelos Atómicos", "Enlace Químico", "Propiedades de los metales", "Elementos de la tabla periódica","Trabajos de Cannizaro y Mendeleyev","Regularidades de la tabla periódica","Metales y Metaloides","Caracter Metálico, Valencia y Masa Atómica","Importancia de los Elementos para los Seres Vivos","Enlace Iónico","Enlace Covalente"],
    	        datasets: [{
    	        	label: "Calificaciones",
    	        	backgroundColor: 'rgba(59, 195, 53, 0.7)',
    	        	borderColor: 'rgba(114, 146, 191,1)',
    	            fillColor: "rgb(120,0,0,0.5)",
    				strokeColor: "rgb(100,10,90)",
    				pointColor: "rgb(100,20,200,1)",
    				pointStrokeColor: "#fff",
    				data: calif,
    				borderWidth: 1.5
    	        }]
    	    };


    	var chart1 = new Chart(ctx.getContext("2d"), {
    	    type: 'radar',
    	    data: data,
    	    options: {
                scale: {
                    reverse: false,
                    ticks: {
                        beginAtZero: true
                    }
                }
        }
    	});
    </script>
@endsection
