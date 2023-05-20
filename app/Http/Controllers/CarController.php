<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
 
        $cars = Car::get();
        $greetings = 'Welcome azee';
        $hi = 'hi azee';
        $faidz = 'HAI FAIDZ';

        return view('cars.create', ['ajee' => $cars, 'hello' => $greetings, 'hi' => $hi, 'faidz' => $faidz]);
    }

    public function carSubmit(Request $request)
    {

        $registration = $request->input('registration');
        $officialReceipt = $request->input('official_receipt');
        $color = $request->input('color');


        $data = [
                'registration' => $registration,
                'official_receipt' => $officialReceipt,
                'color' => $color
        ];
      
        Car::create($data);

       return back();

    }
        public function show($id)
        {

            $car = Car::find($id);

            return $car->registration;
        }
}