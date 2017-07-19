<table>
  <thead>
  </thead>

  <tbody>
    @foreach($client as $client )
    <tr>
      <td>Client ID</td>
      <td>{{$client->id}}</td>
    </tr>
    <tr>
      <td>Name</td>
      <td>{{$client->name}}</td>
    </tr>
    <tr>
      <td>Address</td>
      <td>{{$client->address}}</td>
    </tr>
    @endforeach
  </tbody>

</table>
