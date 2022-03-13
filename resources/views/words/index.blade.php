@extends('layouts.layout')
   @section('content')
        <div class="imgDiv">
            <img src="/images/dictionary_icon.png" alt="">
        </div>
        <h1 id="copy">This is Dictionary web Page</h1>
        <ol>
            <!-- @for($i=0; $i< count($words); $i++)
                <li>{{$i." ".$words[$i]['uzbek']}} - {{$words[$i]['english']}}</li>
            @endfor -->
            @foreach($words as $item)
                <!-- @if($loop->first) The first loop! -->
                <!-- @endif -->
                <li>{{$loop->index." ".$item['uzbek']}} - {{$item['english']}}</li>
            @endforeach
        </ol>
    @endsection
    @section('footer')
        <p> Copyright 2021 Toshkent</p>
        <script src="/js/java.js"></script>
    @endsection
    