<x-layout title="Editing Category!">
    <x-categories.form :action="route('categories.update', $category->id)" :name="$category->name" />
</x-layout>
