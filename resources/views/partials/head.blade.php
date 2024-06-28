<head>
 <meta charset="UTF-8">
 <title>Aplikacja Książki</title>
 <link rel="stylesheet" href="{{ URL::asset('styles.css') }}" />
 <style>
    .right {
  position: absolute;
  right: 0px;
  width: 100px;
  padding: 10px;
}
 </style>
</head>
<body>
@if(Auth::check())
<a class="right" href="./konto">Moje konto</a>
@endif
</body>
