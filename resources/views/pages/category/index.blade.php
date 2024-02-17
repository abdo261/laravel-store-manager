<x-layout title="category" category="active">
    <div class="d-flex justify-content-between align-items-baseline">
        <h1>Category List:</h1> <a href="{{route('category.create')}}" class="btn btn-primary fw-bold">create</a>
    </div>
    <div class="container mt-2">
        @if(isset($errorMessage))
        <div class="alert alert-danger d-flex gap-2 fw-bold justify-content-baseline"><i class="bi bi-exclamation-triangle"></i>{{ $errorMessage }}</div>
@endif
@if(isset($categorys))
        <table class="table">
            <thead class="table table-light">
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Color</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorys as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td> <div class="square" style="background-color:{{ $category->color }} ;"></div></td>
                        <td>
                            <div class="d-flex align-items-center justify-content-end gap-4">
                                <a href="{{route('category.show',$category->id)}}" class="btn-action text-primary fw-bold"><i class="bi bi-eye-fill"></i></a>                                       
                                <a href="{{route('category.edit',$category->id)}}" class="btn-action text-warning fw-bold"><i class="bi bi-pen"></i></a>
                                <a href="{{route('category.destroy',$category->id)}}" class="btn-action text-danger fw-bold"><i class="bi bi-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>@endif
    </div>
</x-layout>
