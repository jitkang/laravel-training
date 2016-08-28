@extends("layout")

@section("body")
    <h1 class="text-center">List of Cars</h1>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            <div class="well">
                <ul class="list-unstyled text-center">
                    @foreach($cars as $car)
                        <li><a href="/car/{{$car->id}}">{{$car->brand}} {{$car->name}}</a></li>
                    @endforeach
                    <li class="no-result text-center">No car available in the database.</li>
                </ul>
                <a href="/car/new" class="btn btn-primary">New Car</a>
            </div>
        </div>
    </div>

@stop