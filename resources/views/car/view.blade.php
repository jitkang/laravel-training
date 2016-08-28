@extends("layout")

@section("body")
    <h1 class="text-center">Car's Information</h1>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="well">
                <div class="form-horizontal">

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="name">Model Name</label>
                        <div class="col-md-8">
                            <p class="form-control-static">
                                {{$car->name}}
                            </p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="brand">Brand</label>
                        <div class="col-md-8">
                            <p class="form-control-static">
                                {{$car->brand}}
                            </p>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="description">Description</label>
                        <div class="col-md-8">
                            <p class="form-control-static">
                                {!! nl2br(e($car->description)) !!}
                            </p>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <div class="col-md-8 col-md-push-4">
                            <a class="btn btn-primary" href="/car/{{$car->id}}/edit">Edit</a>
                            <a class="btn btn-danger" href="/car/{{$car->id}}/delete">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop