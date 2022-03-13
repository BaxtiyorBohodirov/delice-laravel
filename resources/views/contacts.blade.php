@extends('layouts.layout1')
@section('content')
<div class="title-top">
    <div class="title-top-img">
        <img src="/app/images/title-top.png" alt="">
    </div>
    <h2 class="title-top-item">Контакты</h2>
</div>
<!--HEADER END-->
<!--Main
==========================-->
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 ag-main-contact-blog delice-contacts">
                    <div class="ag-main-contact">
                        <div class="ag-main-contact-title-div">
                            <p class="ag-main-contact-title">{{__('Adress')}}: </p>
                        </div>
                        <div class="ag-main-contact-phone">
                            <p>{{$contact->address()}}</p>
                        </div>
                    </div>
                    <div class="ag-main-contact">
                        <div class="ag-main-contact-title-div">
                            <p class="ag-main-contact-title">{{__('Phone')}}: </p>
                        </div>
                        <div class="ag-main-contact-phone">
                            <a href="tel: +998901234567">{{$contact->phone}}</a>
                        </div>
                    </div>
                    <div class="ag-main-contact">
                        <div class="ag-main-contact-title-div">
                            <p class="ag-main-contact-title">{{__('Email')}}: </p>
                        </div>
                        <div class="ag-main-contact-phone">
                            <p>{{$contact->email}}</p>
                        </div>
                    </div>

                </div>
                    <form id="contactForm">
                        <div class="col-xl-6 col-lg-6 ag-main-contact-blog">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="text" name="name" class="ag-main-contact-input" placeholder="ФИО">
                            <input type="text" name="phone" class="ag-main-contact-input" placeholder="Телефон">
                            <input type="email" name="email" class="ag-main-contact-input" placeholder="Email">
                            <textarea name="content" id="" class="ag-main-contact-textarea" placeholder="Комментарий"></textarea>
                            <div class="de-contacts-btn">
                                <input class="contacts-button" type="submit" value="Отправить">
                            </div>
                        </div>
                    </form>
            </div>
        </div>

    <div class="ag-map" id="map"></div>

<!--Main
==========================-->
@endsection