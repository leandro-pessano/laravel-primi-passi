<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>{{$nome}} {{$cognome}}</h1>

  <h2>Informazioni:</h2>
  <small>numero informazioni: {{count($infos)+1}}</small>
  <ul>
    @foreach ($infos as $key => $info)
      <li>{{$key}} : {{$info}}</li>
    @endforeach

    @if ($vivo)
      <li>in vita: sì</li>
    @else
      <li>in vita: no</li>
    @endif
  </ul>

  <h2>Informazioni extra:</h2>
  <ul>
    @forelse ($extra_infos as $extra_info)
      <li>{{$extra_info}}</li>
    @empty
      <p>Informazioni extra mancanti</p>
    @endforelse
  </ul>
</body>
</html>
