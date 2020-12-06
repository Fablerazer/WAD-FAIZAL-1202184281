@extends('main')

@section('title', 'Dashboard')

@section('content')

<div class="center mt-5">

    <tbody>
        @forelse ($orders as $item)
        <h3 class="card-title mb-5" align="center">History</h3>

        <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product</th>
            <th scope="col">Buyer Name</th>
            <th scope="col">Contact</th>
            <th scope="col">Amount</th>
        </tr>
        </thead>
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->product_id }}</td>
                <td>{{ $item->buyer_name }}</td>
                <td>{{ $item->buyer_contact }}</td>
                <td>{{ $item->amount }}</td>
            </tr>
            @empty
                <center>
                <tr>
                    <td colspan="5" style="text-align:center;">There is No Data...</td>
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

