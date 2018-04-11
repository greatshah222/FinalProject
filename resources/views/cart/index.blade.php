@extends('layout.main')

@section('content')

    <h3>My Collection</h3>


    <table class="table table-hover">
        <thead>
        <tr>
            <th>Book Name</th>



        </tr>
        </thead>
        <tbody>
        @foreach($cartItems as $cartItem)
            <tr>
                <td>{{$cartItem->name}}</td>








            </tr>
        @endforeach
        </tbody>
    </table>






@endsection