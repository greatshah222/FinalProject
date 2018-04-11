@extends('layout.main')

@section('content')
    <div class="row">

        <h3>My Collection</h3>


        <table class="table table-hover">
            <thead>
            <tr>
                <th>Book Name</th>
                <th>Total Number Of book</th>

                <th>Action</th>



            </tr>
            </thead>
            <tbody>
            @foreach($cartItems as $cartItem)
                <tr>
                    <td>{{$cartItem->name}}</td>
                    <td></td>
                    <td>

                        <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input class="button small alert" type="submit" value="Delete">
                            <input class="button small" type="submit" value="Read Now">
                        </form>
                    </td>










                </tr>
            @endforeach
            <tr>

                <td></td>


                <td>{{Cart::count()}} Book(s)</td>
                <td></td>

            </tr>
            </tbody>
        </table>
    </div>







@endsection