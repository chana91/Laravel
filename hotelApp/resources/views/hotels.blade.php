<html>
<head>
    <title>Hotel Management</title>

    <meta name="_token" content="{!! csrf_token() !!}"/>
    <!--		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>-->

    <link href={{URL::asset('css/bootstrap.min.css')}} rel='stylesheet' type='text/css'>

    <!--        <link href={{URL::asset('css/main.css')}} rel='stylesheet' type='text/css'>-->




</head>
<body>
<div class="container container-table">
    <div class="row vertical-center-row">

        <h1>Search Hotels</h1>






        {!! Form::open(array('url'=>'','method'=>'POST')) !!}
        <div class="control-group">

            <div class="controls">
                {!! Form::text('hotelName','',array('id'=>'hotelName','placeholder' => 'Type city')) !!}
            </div>
            Available Hotels:<br>
            <div id="test2"></div>
            <ul id="test">

            </ul>
        </div>


        {!! Form::close() !!}


    </div>



</div>


<script src={{URL::asset('js/jq.js')}}  type="text/javascript" ></script>


<script src={{URL::asset('js/bootstrap.min.js')}} type="text/javascript"></script>
<script src={{URL::asset('js/application.js')}} type="text/javascript"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
</script>

</body>
</html>


<?php
/**
 * Created by PhpStorm.
 * User: spcd
 * Date: 11/26/15
 * Time: 9:47 PM
 */

