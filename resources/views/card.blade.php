@extends('layouts.layout1')
@section('content')
    <div class="title-top">
        <div class="title-top-img">
            <img src="/app/images/title-top.png" alt="">
        </div>
        <h2 class="title-top-item">Магазин</h2>
    </div>
    <!--Main-->
        <div class="container">
            <div class="card">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 card-block">
                        <div class="card-item">
                            <div class="card-img-block">
                                <div class="card-img-block-first">
                                    <img src="{{Voyager::image($productImages[0]->image)}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <div class="card-img-block-second">
                                <div class="card-img-block-second-img-1">
                                    <img src="{{Voyager::image($productImages[1]->image)}}" alt="">
                                </div>
                                <div class="card-img-block-second-img-2">
                                    <img src="{{Voyager::image($productImages[2]->image)}}" alt="">
                                </div>
                                <div class="card-img-block-second-img-3">
                                    <img src="{{Voyager::image($productImages[3]->image)}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="card-info">
                            <h4 class="card-info-title">{{$product->title()}}</h4>
                            <div class="card-info-sub-text">
                                <p>{{$product->subContent()}}</p>
                            </div>
                            <div class="card-info-text">
                                <p>
                                    <?=$product->content()?>
                                </p>
                            </div>
                            <div class="card-button-block">
                                <div class="card-info-counter c-counter">
                                    <div class="card-info-counter-item">1</div>
                                    <div class="card-info-counter-block">
                                        <button class="card-info-counter-block-plus">+</button>
                                        <button class="card-info-counter-block-plus">-</button>
                                    </div>
                                </div>
                                <button type="button" class="card-info-button">добавить в корзину</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-about">
                <ul class="card-about-menu">
                    @foreach($productDetails as $item)
                        <li class="card-about-menu-item"><a id="{{$item->id}}" href="#" class="card-about-menu-link <?php if($loop->index===0) echo 'active'?>">{{$item->title()}}</a></li>
                    @endforeach
                </ul>
                <div class="card-about-text">
                    <p>
                        {{$productDetails[0]->content()}}
                    </p>
                </div>
            </div>
        </div>
        <div class="section-two-card">
            <div class="container">
                <h2 class="section-first-title">Похожие товары</h2>
                <div class="section-first-devider"></div>
                <div class="section-two-card-block row">
                    @foreach($sameProducts as $item)
                        <div class="section-two-card-block-item col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="section-two-block-item-img">
                                    <img src="{{Voyager::image($item->image)}}" alt="">
                                    <div class="section-two-block-item-img-button-div">
                                        <button type="type" class="section-two-block-item-img-button">Подробнее</button>
                                    </div>
                                </div>
                                <h6 class="section-two-block-item-title">{{$item->title()}}</h6>
                                <p class="section-two-block-item-text">{{$item->subContent()}}</p>
                                <p class="section-two-block-item-sum"><span>{{$item->price}}</span>сум</p>
                            </div>
                     @endforeach        
                </div>
                   
            </div>
        </div>
    <!--Main-->
@endsection