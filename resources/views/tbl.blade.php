<table class="table table-borderless" id="table">
  <thead align="center">
    <tr>
      <th class="text-center">#</th>
      <th class="text-center">Name</th>
      <th class="text-center">Actions</th>
    </tr>
  </thead>
  @foreach($data as $item)
  <tr class="item{{$item->id}}">
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td><button class="edit-modal btn btn-info" data-id="{{$item->id}}"
        data-name="{{$item->name}}">
        <span class="glyphicon glyphicon-edit"></span> Edit
      </button>
      <button class="delete-modal btn btn-danger"
        data-id="{{$item->id}}" data-name="{{$item->name}}">
        <span class="glyphicon glyphicon-trash"></span> Delete
      </button></td>
  </tr>
  @endforeach
</table>
