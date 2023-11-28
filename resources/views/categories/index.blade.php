<x-layout title="Categories">
    <a href="/categories/create" class="btn btn-dark">Add New Category</a>
    <ul class="list-group">
        @foreach($categories as $category)
            <li class="list-group-item">{{$category->name}}</li>
        @endforeach
    </ul>
</x-layout>
