<div class="main_top">

    <div class="img_main_top">

        <img src="{{asset('images/jumbotron.jpg')}}" alt="">

    </div>
    
</div>

{{-- central main --}}

<div class="fumetto">

    <div class="wrapper">
        <h2>CURRENT SERIES</h2>

        <div class="box_fumetto">

            @foreach($comics as $listaFumetti)
            <div class="single_fumetto">

                <div class="img_box_fumetto">
                    <img src="{{ $listaFumetti["thumb"] }}" alt="">
                </div>

                <h6>{{ $listaFumetti["series"] }}</h6>
            </div>
            @endforeach

        </div>

        <div class="but_fumetto">
            <button>LOAD MORE</button>
        </div>
        
    </div>
</div>

<div class="main_bottom">

    <div class="wrapper">

        <div class="wrap_main_bottom">

            <div class="img_main_bottom">

                <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
            </div>

            <h5>digital comics</h5>
        </div>

        <div class="wrap_main_bottom">

            <div class="img_main_bottom">

                <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
            </div>

            <h5>dc merchandise</h5>
        </div>

        <div class="wrap_main_bottom">

            <div class="img_main_bottom">

                <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
            </div>

            <h5>subscription</h5>
        </div>
        <div class="wrap_main_bottom">

            <div class="img_main_bottom">

                <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
            </div>

            <h5>comic shop locator</h5>
        </div>
        <div class="wrap_main_bottom">

            <div class="img_main_bottom">

                <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">
            </div>

            <h5>dc power visa</h5>
        </div>
    </div>
</div>