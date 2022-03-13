@extends('layouts.layout1')
@section('content')
    <div class="title-top">
        <div class="title-top-img">
            <img src="/app/images/title-top.png" alt="">
        </div>
        <h2 class="title-top-item">{{__('News')}}</h2>
    </div>
    <!--HEADER END-->

    <!--Main Begin-->
    <div class="container">
        <div class="de-about-block">
            <div class="de-about-block-img">
                <img src="{{Voyager::image($news->image)}}" alt="">
            </div>
            <div class="de-about-block-text">
                <h4 class="de-about-block-text-title">{{$news->title()}}</h4>
                <div class="de-about-block-sub-text">
                    <p>
                       <?php echo date('d.m.Y',strtotime($news->updated_at?$news->updated_at:$news->created_at));?>
                    </p>
                </div>
                <p class="de-about-block-text-item">
                    {{$news->subContent()}}
                </p>
            </div>
        </div>
        <div class="news-in-text-one">
            <p>
                {{explode('/',$news->content())[0]}}
            </p>
        </div>
        <div class="news-in-text-one" style="margin-bottom: 40px">
            <p>
                {{explode('/',$news->content())[1]}}
            </p>
        </div>
    </div>
    <!--Main End-->
@endsection