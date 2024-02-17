
<x-layout title="category" category="active">
    <div>
        <h1>Edit Category :</h1>
    </div>
    <div class="d-flex justify-content-center pt-5">
        <form action="{{route('category.update',$category->id)}}" class="bg-light rounded p-3 d-flex flex-column form-create" method="POST">
            @csrf
            @method('POST')
            @if(session('error'))
    <div class="alert alert-danger d-flex gap-2 fw-bold justify-content-baseline"><i class="bi bi-exclamation-triangle"></i>{{ session('error') }}</div>
@endif
            <div class="form-input my-2">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control"value="{{$category->name}}" >
                @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-input my-2 d-flex flex-column">
                <label for="color">Color:</label>
                <input type="color" name="color" id="color" value="{{$category->color}}">
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
</x-layout >