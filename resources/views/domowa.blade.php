<!DOCTYPE html>
<html lang="pl">
@include('partials.head')
<body>
 @include('partials.navi')
 <div id="zawartosc">
 <h1>Witaj w aplikacji Laravel – Książki</h1>
 @if(Auth::check())
 <h2>Zalogowano</h2>
 @endif
 </div>
</body>
</html>
