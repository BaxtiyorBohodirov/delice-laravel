<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style1.css">
    <link rel="stylesheet" href="/css/style2.css">
    <style>
        .container-fluid
        {
            display: block;
            opacity: 1;
            position: fixed;
            margin: 0px;
            padding: 0px;
            width: 100%;
        }
        input[type=checkbox]
        {
            width: auto;
            margin:0px 15px;
        }
        label
        {
            font-size: larger;
            margin: 0px;
        }
         #words1,#words2{
          background-color: rgba(0, 0, 0, 0.858);
          margin: 0px auto;
          position: absolute;
          top: 0px;
          width: 100%;
          height: 100%;
          overflow: scroll;
          font-size: 25px;
          font-weight: 600;
          display: none;
        }
        #words2
        {
          /* display: block; */
          display: flex;
          flex-direction: row; 
          justify-content: space-around;
          align-items: center;
          overflow: hidden;
          display: none;
        }
        #cards
        {
          width: 100%;
          height: auto;
          display: flex;
          flex-direction: row;
          justify-content: space-around;
          /* flex-wrap: wrap; */
          text-align: center;
          overflow: hidden;
        }
        #words2 .card{
          top:0px;
          /* left: 100%; */
          /* position: relative !important; */
          /* animation: animate 5s linear infinite; */
          margin:10px;
          /* position: absolute; */
          /* width: 70%; */
          /* transform:scale3d(2,2,1); */
        }
       #words2 .active_card
        {
          position: relative;
          left: 0%;
          width: 250px;
          height: 250px;
          text-align: center;
          /* animation: animate 5s linear infinite; */
          /* left: unset !important; */
          /* display: block; */
          
        }
        .card-body
        {
          display: flex;
          justify-content: space-around;
          align-items: center;
          /* transform: scale3d(1.1,1.1); */
        }
        @keyframes animate 
        {
          0%{
            left: 100%;
          }
          100%
          {
            left: -100%;
          }
        }
        #words1 dl{
            color:white;
          }
        #words1 dt{
          color: rgb(38, 0, 255);
          text-transform: uppercase;
        }
        dl font{
          color: blue;
        
        }
        #exit_AllWords, #exit_Cards, #next_Card, #previous_Card
        {
          position: fixed;
          top:0px;
          margin: 5px !important;
          right: 0px;
        }
        #next_Card
        {
          top:45%;
        }
        #previous_Card
        {
          top:45%;
          left: 0px;
        }
    </style>
</head>
<body>
          
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">ESSENTIAL WORDS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item">
                  <a class="nav-link" href="index.html">All words <span class="sr-only">(current)</span></a>
                </li> -->
                <li class="nav-item active">
                  <a class="nav-link" href="#">Essential words</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="coursebook.html">Coursebook words</a>
                </li> -->
                <!-- <li class="nav-item">
                  <a class="nav-link" href="irrVerbs.html">Irregular verbs</a>
              </li> -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Units
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <input type="checkbox"  name="" value="0" id="units" checked><label for="units">All units</label><br>
                    <input type="checkbox"  name="" value="1" id="unit1" checked><label for="unit1">Unit1</label><br>
                    <input type="checkbox"  name="" value="2" id="unit2" checked><label for="unit2">Unit2</label><br>
                    <input type="checkbox"  name="" value="3" id="unit3" checked><label for="unit3">Unit3</label><br>
                    <input type="checkbox"  name="" value="4" id="unit4" checked><label for="unit4">Unit4</label><br>
                    <input type="checkbox"  name="" value="5" id="unit5" checked><label for="unit5">Unit5</label><br>
                    <input type="checkbox"  name="" value="6" id="unit6" checked><label for="unit6">Unit6</label><br>
                    <input type="checkbox"  name="" value="7" id="unit7" checked><label for="unit7">Unit7</label><br>
                    <input type="checkbox"  name="" value="8" id="unit8" checked><label for="unit8">Unit8</label><br>
                    <input type="checkbox"  name="" value="9" id="unit9" checked><label for="unit9">Unit9</label><br>
                    <input type="checkbox"  name="" value="10" id="unit10" checked><label for="unit10">Unit10</label><br>
                    <input type="checkbox"  name="" value="11" id="unit11" checked><label for="unit11">Unit11</label><br>
                    <input type="checkbox"  name="" value="12" id="unit12" checked><label for="unit12">Unit12</label><br>
                    <input type="checkbox"  name="" value="13" id="unit13" checked><label for="unit13">Unit13</label><br>
                    <input type="checkbox"  name="" value="14" id="unit14" checked><label for="unit14">Unit14</label><br>
                    <input type="checkbox"  name="" value="15" id="unit15" checked><label for="unit15">Unit15</label><br>
                    <input type="checkbox"  name="" value="16" id="unit16" checked><label for="unit16">Unit16</label><br>
                    <input type="checkbox"  name="" value="17" id="unit17" checked><label for="unit17">Unit17</label><br>
                    <input type="checkbox"  name="" value="18" id="unit18" checked><label for="unit18">Unit18</label><br>
                    <input type="checkbox"  name="" value="19" id="unit19" checked><label for="unit19">Unit19</label><br>
                    <input type="checkbox"  name="" value="20" id="unit20" checked><label for="unit20">Unit20</label><br>
                    <input type="checkbox"  name="" value="21" id="unit21" checked><label for="unit21">Unit21</label><br>
                  </li>
                <!-- <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
              </ul>
              <button id="allWords" class="btn btn-outline-success my-2 my-sm-0">All words</button>
              <button id="cards_enter" class="btn btn-outline-success my-2 my-sm-0">Cards</button>
              <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
              </form> -->
            </div>
        </nav> 
        <h1 id="findWord">
            @if(isset($word))
                <?=$word;?>
            @endif
        </h1>
        <h1 class="sanoq">Savol</h1>
       
        <h1 class="savol">Savol</h1>
        <br>   
        <input id="javob" type="text"><br>
        <button class="next btn-primary">Next</button>
        <h1 class="javoblar">Natija:0</h1>
       
        <div id="words1">
            <dd>
              
            </dd>
            <button id="exit_AllWords" class="btn btn-outline-primary my-2 my-sm-0">Exit</button>
        </div>
        <div id="words2">
          <div id="cards">
            <div class="card text-white bg-primary mb-3 active_card" style="max-width: 18rem;">
              <div class="card-body">
                <h1 class="card-title">Primary</h1>
              </div>
            </div>
             <div class="card text-white bg-secondary mb-3 noActive" style="max-width: 18rem;">
                           <div class="card-body">
                <h1 class="card-title">Primary</h1>
              </div>
            </div>
            <div class="card text-white bg-success mb-3 noActive" style="max-width: 18rem;">
              <div class="card-body">
                <h1 class="card-title">Primary</h1>
              </div>
            </div>
            <div class="card text-white bg-danger mb-3 noActive" style="max-width: 18rem;">
              <div class="card-body">
                <h1 class="card-title">Primary</h1>
              </div>
            </div>
            <div class="card text-white bg-warning mb-3 noActive" style="max-width: 18rem;">
              <div class="card-body">
                <h1 class="card-title">Primary</h1>
              </div>
            </div>
            <div class="card text-white bg-info mb-3 noActive" style="max-width: 18rem;">
              <div class="card-body">
                <h1 class="card-title">Primary</h1>
              </div>
            </div>
            <div class="card bg-light mb-3 noActive" style="max-width: 18rem;">
              <div class="card-body">
                <h1 class="card-title">Primary</h1>
              </div>
            </div>
            <div class="card text-white bg-dark mb-3 noActive" style="max-width: 18rem;">
              <div class="card-body">
                <h1 class="card-title">Primary</h1>
              </div>
            </div>
          </div>
          <button id="next_Card" class="btn btn-outline-primary my-2 my-sm-0">Next</button>
          <button id="previous_Card" class="btn btn-outline-primary my-2 my-sm-0">Previous</button>
          <button id="exit_Cards" class="btn btn-outline-primary my-2 my-sm-0">Exit</button>
        </div>
      </div> 
    <script src="/js/poper.js"></script>
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script>
        let y=0; 
        let essential=true;
        $('#next_Card').click(function(){
        //     let oldActiveCard=$('.active_card'); 
        //     oldActiveCard.animate({left:'-100%'},'slow', function(){
        //     oldActiveCard.removeClass('active_card');
        // });
            let x=0;
            // (Math.floor(Math.random()*7)+1);
            console.log(y);
            let newActiveCard=$("#cards .noActive:nth-child("+y+")");
            console.log(newActiveCard);
            // newActiveCard.addClass('active_card');
            // newActiveCard.removeClass('noActive');
            // newActiveCard.animate({left:'0px'});
          
            newActiveCard.animate({transform: 'rotateX(90deg)'});
            console.log(newActiveCard);
            // oldActiveCard.addClass('noActive');
            console.log($('.noActive'));
            y++;
        });
    </script>
    <script src="/js/java.js"></script>
    <script>
       
    </script>
  </body>
</html>
