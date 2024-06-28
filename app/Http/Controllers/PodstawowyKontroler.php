<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PodstawowyKontroler extends Controller
{
    public function zwrocStroneDomowa(){
        return view('domowa');
        }

    public function zwrocListeKsiazek()
    {
        $ksiazkiZBazy = DB::table('ksiazka')->leftJoin('kategoria',
        'ksiazka.idkat', '=', 'kategoria.id') -> get();
        return view('lista_ksiazek', ['ksiazki' => $ksiazkiZBazy,]);
    }

    public function zwrocListeKategori()
    {
        $kategorieZBazy = DB::table('kategoria') -> get();
        return view('lista_kategori', ['kategoria' => $kategorieZBazy,]);
    }

    public function zwrocListeWydawnictwa()
    {
        $wydawnictwoZBazy = DB::table('wydawnictwo') -> get();
        return view('lista_wydawnictw', ['wydawnictwo' => $wydawnictwoZBazy,]);
    }

    public function zwrocDodajKsiazke(){
        $kategorieZBazy = DB::table('kategoria')-> get();
        return view('dodaj_ksiazke', ['kategorie' => $kategorieZBazy,]);
    }
    public function dodajKsiazke(Request $request){
        $tytulZFormularza = $request->tytul;
        $idKategoriiZFormularza = $request->idkat;
        DB::table('ksiazka')->insert([
        'tytul' => $tytulZFormularza,
        'idkat' => intval($idKategoriiZFormularza),
        'idwyd' => intval(0),
        ]);
        return redirect('/ksiazki');
    }

    public function zwrocDodajKategorie(){
        return view('dodaj_kategorie');
    }
    public function dodajKategorie(Request $request){
        $opisZFormularza = $request->opis;
        DB::table('kategoria')->insert([
        'opis' => $opisZFormularza,
        ]);
        return redirect('/kategorie');
    }

    public function zwrocDodajWydawnictwo(){
        return view('dodaj_wydawnictwo');
    }
    public function dodajWydawnictwo(Request $request){
        $nazwaZFormularza = $request->nazwa;
        $adresZFormularza = $request->adres;
        DB::table('wydawnictwo')->insert([
        'nazwa' => $nazwaZFormularza,
        'adres' => $adresZFormularza,
        ]);
        return redirect('/wydawnictwa');
    }

    public function zmienStanUwierzytelnienia()
    {
        if(auth()->check()){
            $user = auth()->user();
            Auth::logout();
            return view('wylogowano');
        }
        else{
            return redirect('/register');
        }
    }
}
