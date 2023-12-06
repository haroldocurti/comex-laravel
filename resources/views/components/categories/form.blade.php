<form action="{{$action}}" method="post">
    @csrf
    @if($update)
        @method('PUT')
    @endif
    <div class="mb-3">
        <label for="name">Name:</label>
        <input type="text"
               id="name"
               name="name"
               @isset($name)
               value="{{$name}}"
               @endisset
               class="form-control"
        />
    </div>
    @isset($name)
    <button type="submit" class="btn btn-dark">Edit</button>
    @else
        <button type="submit" class="btn btn-dark">Add</button>
    @endisset

</form>
