<form action="{{route('business.store')}}" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="Enter Business Name">

    <select name="industry" id="industry">
        <option value="Clothing">Clothing</option>
        <option value="Technology">Technology</option>
    </select>

    <x-primary-button>Create</x-primary-button>
</form>
