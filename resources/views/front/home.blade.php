@extends('layout.main')

@section('content')
    <section class="hero text-center">
        <br/>
        <br/>
        <br/>
        <br/>
        <h2 >
            <strong>
                Netflix for Books
            </strong>
        </h2>
        <br>
        <a href="{{route('trending')}}"><button class="button large">Trending Now</button></a>
    </section>
    <br/>
    <div class="subheader text-center">
        <h2><b> Stay curious</b>

        </h2>
        <h3>There's always something new to discover.</h3>
    </div>


    <div class="row">
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Read Later
                    </a>


                    <a href="{{url('book')}}">
                        <img src="https://github.com/greatshah222/Software_development/blob/firstPhase/2.jpg?raw=true"/>
                    </a>
                </div>

            </div>
        </div>
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Read Later
                    </a>


                    <a href="{{url('book')}}">

                        <img src="https://github.com/greatshah222/Software_development/blob/firstPhase/9780134743356_l.jpg?raw=true"/>
                    </a>
                </div>

            </div>
        </div>  <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Read Later
                    </a>


                    <a href="#">
                        <img src="https://github.com/greatshah222/Software_development/blob/firstPhase/11.jpg?raw=true"/>
                    </a>
                </div>

            </div>
        </div>  <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Read Later
                    </a>


                    <a href="#">
                        <img src="http://i.imgur.com/Mcw06Yt.png"/>
                    </a>
                </div>

            </div>
        </div>
        <br>
        <br>

        <div class="subheader text-center">
            <h2>
                Our Recommendation
            </h2>
        </div>

        <!-- Latest SHirts -->
        <div class="row">
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Read Later
                        </a>


                        <a href="#">
                            <img src="https://github.com/greatshah222/Software_development/blob/firstPhase/img1a.jpg?raw=true"/>
                        </a>
                    </div>
                    <a href="shirt.html">
                        <h3>
                            Romance
                        </h3>
                    </a>
                    <h5>
                        Oulu University Press                  </h5>
                    <p>
                        This is a book based on love story from Spain.


                    </p>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Read Later
                        </a>
                        <a href="#">
                            <img src="https://github.com/greatshah222/Software_development/blob/firstPhase/imga.jpg?raw=true"/>
                        </a>
                    </div>
                    <a href="shirt.html">
                        <h3>
                            Romance
                        </h3>
                    </a>
                    <h5>
                        Oulu University Press                  </h5>
                    <p>
                        This is a book based on love story from Spain.


                    </p>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Read Later
                        </a>
                        <a href="#">
                            <img src="https://github.com/greatshah222/Software_development/blob/firstPhase/imgaa.jpg?raw=true"/>
                        </a>
                    </div>
                    <a href="shirt.html">
                        <h3>
                            Romance
                        </h3>
                    </a>
                    <h5>
                        Oulu University Press                  </h5>
                    <p>
                        This is a book based on love story from Spain.


                    </p>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Read Later
                        </a>
                        <a href="#">
                            <img src="https://github.com/greatshah222/Software_development/blob/firstPhase/p02vdpfn.jpg?raw=true"/>
                        </a>
                    </div>
                    <a href="shirt.html">
                        <h3>
                            Romance
                        </h3>
                    </a>
                    <h5>
                        Oulu University Press                  </h5>
                    <p>
                        This is a book based on love story from Spain.


                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection

