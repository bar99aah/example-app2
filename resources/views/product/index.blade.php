@extends ('layout.master')

@section('content')

<div class="container">
    <div class="row">
    <div class="my-5">
<a class="btn btn-primary" href="{{route('product.create')}}">add product</a>
  </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">name</th>
              <th scope="col">price</th>
              <th scope="col">description</th>
              <th scope="col">category_id</th>
              <th scope="col">serial_number</th>
  
            </tr>
          </thead>
          <tbody>
            @forelse($products as $product)
              <tr>
                <td scope="row">{{$product->id}}</td>
                <td scope="row">{{$product->name}}</td>
                <td scope="row">{{$product->price}}</td>
                <td scope="row">{{$product->description}}</td>
                <td scope="row">{{$product->category_id}}</td>
                <td scope="row">{{$product->serial_number}}</td>
                <td>
                  <a href="{{route('product.edit')}}">update</a>
                  <a href="{{route('product.delete',$product->id)}}">delete</a>
                </td>
              </tr>
              @empty
              <td scope="100">there is no records on database table</td> 
              @endforelse 
          
          </tbody>
        </table>
  </div>
</div>

@endsection
