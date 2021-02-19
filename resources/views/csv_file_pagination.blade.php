@extends('csv_file')



@section('csv_data')
<div class="container">
    <table class="table table-bordered table-striped">
        <tr>
            <thead>
                <th>UserName</th>
                <th>Email Addres</th>
                {{-- <th>Product Code</th>
                <th>Sku</th>
                <th>Category</th>
                <th>Tag</th>
                <th>Product Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Brand</th>
                <th>Madhesia</th>
                <th>Ngjyra</th> --}}
            </thead>
            <tbody>
                @foreach ($data as $row)
                    <tr>
                        <td>{{$row['name']}}</td>
                        <td>{{$row->email}}</td>
                    </tr>
                @endforeach
            </tbody>
        </tr>
    </table>
</div>
@endsection