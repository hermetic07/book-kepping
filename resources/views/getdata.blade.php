<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach($data as $d)
     @if($d->name==="Nina")
     <h3>{{$d->name}}</h3><h3>{{$d->lastname}}</h3>
     @endif
    @endforeach
  </body>
</html>
