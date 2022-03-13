<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{

    public function BMI()
    {
        return view('bmi');
    }

    public function bmiSavetoDB(Request $request, User $user)
    {
        $request->validate([
            'bmi' => 'required',
        ]);
    
        $user->update($request->all());

        return redirect()->route('calculator.bmi')
            ->with('success', 'Wynik został dodany do bazy danych.');
    }

    public function BMR()
    {
        return view('bmr');
    }

    public function bmrSavetoDB(Request $request, User $user)
    {
        $request->validate([
            'bmr' => 'required',
        ]);
    
        $user->update($request->all());

        return redirect()->route('calculator.bmr')
            ->with('success', 'Wynik został dodany do bazy danych.');
    }

    public function maxrep()
    {
        return view('maxrep');
    }

    public function maxrepSavetoDB(Request $request, User $user)
    {
        $request->validate([
            'maxrep' => 'required',
        ]);
    
        $user->update($request->all());

        return redirect()->route('calculator.maxrep')
            ->with('success', 'Wynik został dodany do bazy danych.');
    }
} 
