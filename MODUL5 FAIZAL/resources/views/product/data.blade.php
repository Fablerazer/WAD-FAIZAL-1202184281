@extends('main')

@section('title', 'Dashboard')

@section('content')



<div class="center mt-5">


    <tbody>
        @forelse ($products as $item)
        <h3 class="card-title" align="center">List Product</h3>
        <a href="insert_product" type="button" class="btn btn-dark mb-3">Add Product</a>


        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            @empty
                <center>
                <tr>
                    <td colspan="5" style="text-align:center;" class="center mt-5">There is No Data...</td>
                </tr>
                <center>
                    <tr>
                        <td colspan="5" style="text-align:center;"> <a href="order" type="submit" class="btn btn-dark mx-auto mt-4">Add Product</a> </td>
                    </tr>
        @endforelse
    </tbody>
</table>
</div>

@endsection

