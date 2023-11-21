<x-layout title="Categories">
    <ul>
        @foreach($categories as $category)
            <li>{{$category}}</li>
        @endforeach
    </ul>
</x-layout>
