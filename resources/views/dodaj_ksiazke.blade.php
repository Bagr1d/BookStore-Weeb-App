<!DOCTYPE html>
<html>
@include('partials.head')
<body>
 @include('partials.navi')
 <div id="zawartosc">
 <h2>Dodaj książkę</h2>
 <form class="form-inline" action="{{ url('/dodaj_ksiazke') }}" method="post">
 @csrf
 <p>
 <label for="tytul">Tytuł książki</label>
 <input id="tytul" name="tytul" size="20">
 </p>
 <p>
  <label for="idkat">Wybierz kategorię:</label>
  <select name="idkat" id="idkat">
    @foreach($kategorie as $el)
      <option value="{{$el->id}}">{{$el->opis}}</option>
    @endforeach
  </select>
</p>
 <p><button type="submit" class="btn btn-primary mb-2">Dodaj</button></p>
 </form>
 </div>
</body>
</html>
