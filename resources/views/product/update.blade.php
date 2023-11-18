@extends('layout.master')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <h1 class="my-5">Update product</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session()->has('updated'))
                    <div class="alert alert-success">
                      {{ session('updated') }}
                    </div>
                @endif

                @forelse($products as $product)
                @empty
              <td scope="100">there is no records on database table</td> 
              @endforelse 
                <form method="post" action="{{ route('product.update',$product->id) }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">name</label>
                        <input type="text" class="form-control" name='name' value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">price</label>
                        <input type="text" class="form-control" name='price' value="{{ old('price') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">description</label>
                        <textarea name="description" class="form-control" cols="30" rows="10">{{ old('description') }}</textarea>
                    </div> 
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection