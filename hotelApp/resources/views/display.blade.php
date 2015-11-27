
<html>
<head>
    <title>Hotel Management</title>

    <meta name="_token" content="{!! csrf_token() !!}"/>
    <!--		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>-->

    <link href={{URL::asset('css/bootstrap.min.css')}} rel='stylesheet' type='text/css'>

    <!--        <link href={{URL::asset('css/main.css')}} rel='stylesheet' type='text/css'>-->




</head>
<body>

<h1 style="color: #0044cc">Welcome</h1>

<!---->
<!--<button {{Html::linkAction('WelcomeController@viewHotels')}} >Search Hotels</button>-->
<!--<a  href="{{Html::linkAction('WelcomeController@viewHotels')}}" >ddd</a>-->

<a href="{{URL::route('addHotels')}}"><p style="font-size: 25px;color: darkred" >Add Hotels</p></a>
<a href="{{URL::route('viewHotel')}}"><p style="font-size: 25px;color: #818b40" >View Hotels</p></a>
<!---->
<!--{{Html::linkAction('WelcomeController@viewHotels','Home' ,array('class'=>'btn'))}}-->
<script src={{URL::asset('js/jq.js')}}  type="text/javascript" ></script>


<script src={{URL::asset('js/bootstrap.min.js')}} type="text/javascript"></script>




</body>
</html>




<?php
/**
 * Created by PhpStorm.
 * User: spcd
 * Date: 11/26/15
 * Time: 11:48 PM
 */
