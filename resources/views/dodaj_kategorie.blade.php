<!DOCTYPE html>
<html>
@include('partials.head')
<body>
 @include('partials.navi')
 <div id="zawartosc">
 <h2>Dodaj książkę</h2>
 <form class="form-inline" action="{{ url('/dodaj_kategorie') }}" method="post">
 @csrf
 <p>
 <label for="opis">Opis kategorii</label>
 <input id="opis" name="opis" size="20">
 </p>
 <p><button type="submit" class="btn btn-primary mb-2">Dodaj</button></p>
 </form>
 </div>
</body>
</html>
