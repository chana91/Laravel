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

            <h1>Add Hotels</h1>






                {!! Form::open(array('url'=>'','method'=>'POST', 'id'=>'myform')) !!}
                <div class="control-group">
                    <label class="control-label" for="hName">Hotel Name</label>
                    <div class="controls">
                        {!! Form::text('hName','',array('id'=>'hName','placeholder' => 'Hotel Name')) !!}
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="address">Address</label>
                    <div class="controls">
                        {!! Form::textarea('address','',array('rows'=>'2 ','id'=>'address', 'placeholder' => 'Please Enter the Address')) !!}
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="city">City</label>


                    <div class="controls">
                        {!! Form::select('cities',$cities,null,array('id' => 'cities')) !!}


                    </div>


                </div>
                {!! Form::button('Save', array('id'=>'saveMe','class'=>'btn-success')) !!}
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
