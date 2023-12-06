<x-layout title="Categories">
    <a href="{{route('categories.create')}}" class="btn btn-dark">Add New Category</a>
    @isset($successMessage)
    <div class="alert alert-success">
        {{$successMessage}}
    </div>
    @endisset
    <ul class="list-group">
        @foreach($categories as $category)
            <li class="list-group-item d-flex justify-content-between align-items-center">{{$category->name}}
                <span class="d-flex">
                    <a href="{{route('categories.edit', $category->id)}}" class="btn btn-primary btn-sm">✏️</a>
                <form  action="{{route('categories.destroy', $category->id)}}" method="post" class=" ms-2">
                @csrf
                    @method('DELETE')
                <button class="btn btn-danger btn-sm">🗑️</button>
                </form>
                </span>
            </li>
        @endforeach
    </ul>
</x-layout>
