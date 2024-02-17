<x-layout title="category" category="active">
    <div>
        <h1>Create Category :</h1>
    </div>
    <div class="d-flex justify-content-center pt-5">
        <form action="{{route('category.store')}}" class="bg-light rounded p-3 d-flex flex-column form-create" method="POST">
            @csrf
            @method('POST')
            <div class="form-input my-2">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control"value="{{old('name')}}" >
                @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-input my-2">
                <label for="color">Name:</label>
                <input type="color" name="color" id="color">
                @error('color')
        <div class="text-danger">{{ $message }}</div>
    @enderror
            </div>
            <div class="d-flex justify-content-between my-2" type="submit" value="{{old('color')}}">
                <a href="{{ route('category.index') }}" class="btn btn-warning">cancel</a>
                <button  class="btn btn-success">create</button>
            </div>

        </form>
    </div>

</x-layout>
