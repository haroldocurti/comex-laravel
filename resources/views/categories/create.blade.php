<x-layout title="Create a New Category!">
    <form action="/categories/save" method="post">
        @csrf
        <div class="mb-3">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name"/>
        </div>
        <button type="submit" class="btn btn-dark">Add</button>
    </form>
</x-layout>
