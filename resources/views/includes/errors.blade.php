@if ($errors->any())
    <div class="alert alert-danger" id="alert">
      <ul class="list-unstyled">
        @foreach ($errors->all() as $error)
        <li class="text-danger">{{$error}}</li>
    @endforeach
      </ul>
    </div>
@endif

