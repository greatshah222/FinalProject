
@extends('layout.main')
@section('title','Books')

@section('content')




    <div class="row">
        @forelse($books as $book)
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="{{route('cart.edit',$book->id)}}" class="button expanded add-to-cart">
                        Read Later                </a>
                    <a href="#">
                        <img src="{{url('images',$book->image)}}"/>
                    </a>
                </div>
                <a href="{{route('book')}}">
                    <h3>
                        {{$book->name}}
                    </h3>
                </a>
                <h5>
                  {{$book->publisher}}
                 </h5>
                <p>
{{$book->description}}

                </p>
            </div>
        </div>
            @empty
        <h3>No books</h3>
            @endforelse

    </div>
@endsection