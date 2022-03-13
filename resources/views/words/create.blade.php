<?php
    use App\Models\Words;
?>
@extends('layouts.layout')
   @section('content')
        <div class="imgDiv">
            <img src="/images/dictionary_icon.png" alt="">
        </div>
        @php
        @endphp
        <h1 id="copy">New word created:{{$word}}</h1>
    @endsection
    @section('footer')
        <p> Copyright 2021 Toshkent</p>
        <script src="/js/java.js"></script>
    @endsection
    