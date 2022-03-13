<?php
    use App\Models\Words;
?>
@extends('layouts.layout')
   @section('content')
        <div class="imgDiv">
            <img src="/images/dictionary_icon.png" alt="">
        </div>
        @php
            $word=Words::all();
        @endphp
        <h1 id="copy">{{$id." ".$word[$id]->uzbek."--".$word[$id]->english}}</h1>
    @endsection
    @section('footer')
        <p> Copyright 2021 Toshkent</p>
        <script src="/js/java.js"></script>
    @endsection
    