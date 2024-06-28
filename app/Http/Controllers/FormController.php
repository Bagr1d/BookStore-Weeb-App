<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function dodajKategorie(Request $request)
    {
        $request->validate([
            'opis' => 'required|min:3|max:50',
        ]);
        return "Formularz kategorii został poprawnie wysłany!";
    }

    public function dodajKsiazke(Request $request)
    {
        $request->validate([
            'tytul' => 'required|min:3|max:50',
            'idkat' => 'required',
        ]);
        return "Formularz książki został poprawnie wysłany!";
    }

    public function dodajWydawnictwo(Request $request)
    {
        $request->validate([
            'nazwa' => 'required|min:3|max:50',
            'adres' => 'required|min:3|max:50',
        ]);
        return "Formularz wydawnictwa został poprawnie wysłany!";
    }
}
