<x-layout title="Create a New Category!">
        <x-categories.form :action="route('categories.store')"
                           :name="old('name')"
                           :update="false"
        />
</x-layout>
