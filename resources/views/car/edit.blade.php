@extends("layout")

@section("body")
    <h1 class="text-center">Update Information</h1>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="well">
            {{Form::open(['url'=>'/car/'.$car->id, 'method'=>'PATCH', 'class'=>'form-horizontal'])}}

            <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="name">Model Name</label>
                    <div class="col-md-8">
                        <input id="name" name="name" type="text" placeholder="" class="form-control input-md"
                               required="" value="{{$car->name}}">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="brand">Brand</label>
                    <div class="col-md-8">
                        <input id="brand" name="brand" type="text" placeholder="" class="form-control input-md"
                               required="" value="{{$car->brand}}">

                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="description">Description</label>
                    <div class="col-md-8">
                        <textarea class="form-control" id="description" name="description">{{$car->description}}</textarea>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <div class="col-md-8 col-md-push-4">
                        <button id="" name="" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>


        {{Form::close()}}
    </div>
@stop