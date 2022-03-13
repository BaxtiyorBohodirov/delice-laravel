@extends('layouts.layout1')
@section('content')
<div class="title-top">
    <div class="title-top-img">
        <img src="/app/images/title-top.png" alt="">
    </div>
    <h2 class="title-top-item">О компании</h2>
</div>
<!--HEADER END-->

<!--MAIN-BEGIN-->
<div class="container">
    <div class="about-text">
        <div class="delice-text">
            <p class="section-first-text">
                {{explode('/',$ourmission->content())[0]}}
            </p>
        </div>
        <div class="delice-text">
            <p class="section-first-text">
                {{explode('/',$ourmission->content())[1]}}
            </p>
        </div>
    </div>
</div>
<div class="de-about-wrap">
    <div class="de-about"></div>
    <div class="container"> 
        <div class="de-about-info">
            <div class="de-about-img">
                <img src="{{Voyager::image($about->image)}}" alt="">
            </div>
            <div class="de-about-info-item">
                <h4 class="de-about-info-title">{{$about->title()}}</h4>
                <div class="de-about-devider"></div>
                <div class="de-about-info-text">
                    <p>
                        <?=$about->content()?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-slider">
   @foreach($reviews as $item)
        <div class="main-slider-img">
            <div class="container">
                <div class="main-slider-info">
                    <h2 class="section-first-title slider-margin">ОТЗЫВЫ  О КОМПАНИИ</h2>
                    <div class="section-first-devider"></div>
                    <div class="main-slider-info-text">
                        <p>{{$item->content()}}</p>
                    </div>
                    <h6 class="main-slider-title">{{$item->title()}}</h6>
                    <div class="main-slider-text">
                        <p>{{$item->position()}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
<!--MAIN-END-->