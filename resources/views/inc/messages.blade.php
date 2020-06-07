@if($errors->any())
<div class="container mb-2">
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
</div>
@endif

@if(session('success'))
<div class="container mb-2">
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
</div>
@endif
