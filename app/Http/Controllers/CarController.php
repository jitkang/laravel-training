<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

use App\Http\Requests;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view("car.index", compact("cars"));
    }

    public function create()
    {
        return view("car.new");
    }

    public function insert(Request $request)
    {
        $car = new Car();
        $car->name = $request->name;
        $car->brand = $request->brand;
        $car->description = $request->description;
        $car->save();

        return redirect("/car/" . $car->id);
    }

    public function view(Car $car){
        return view("car.view", compact("car"));
    }

    public function edit(Car $car)
    {
        return view("car.edit", compact("car"));
    }

    public function update(Request $request, Car $car)
    {
        $car->name = $request->name;
        $car->brand = $request->brand;
        $car->description = $request->description;
        $car->save();

        return redirect("/car/" . $car->id);
    }

    public function delete(Car $car){
        $car->delete();
        return redirect("/car");
    }
}
