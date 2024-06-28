<!DOCTYPE html>
<html lang="pl">
 @include('partials.head')
 <body>
 @include('partials.navi')
 <div id="zawartosc">
 <h2>Lista książek</h2>
 <table>
 <thead>
 <tr> <th>Kategoria</th> </tr>
 </thead>
 <tbody>
 @foreach($kategoria as $el)
 <tr> <td>{{$el->opis}}</td> </tr>
 @endforeach
 </tbody>
 </table>
 </div>
 </body>
</html>