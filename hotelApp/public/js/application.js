/**
 * Created by spcd on 11/26/15.
 */
$(document).ready(function()
{


    $('#saveMe').click(function()
    {


        $.ajax({
            type: "POST",
            url: "test",
            // The key needs to match your method's input parameter (case-sensitive).

            data: {
                'hotelName':$('#hName').val(),
//                '_token': $('input[name=_token]').val(),
                'address':$('#address').val(),
                'city':$('#cities').val()



            },
            dataType: "json",
            // contentType: "application/json; charset=utf-8",
            beforeSend : function(xhr, opts){
                if($('#cities').val()== 0) //just an example
                {
                    alert('Please select a city')
                    xhr.abort();
                }
            },

            success: function(data){

                alert('Successfully Saved');
                $('#hName').val('');
                $('#address').val('');


            },
            failure: function(errMsg) {
                alert(errMsg);
            }
        });
    });




    $('#hotelName').keyup(function()
    {
        $val= $('#hotelName').val();


        $.ajax({
            type: "POST",
            url: "searchHotels",
            // The key needs to match your method's input parameter (case-sensitive).

            data: {
                'hotelName':$('#hotelName').val()
//
            },
            dataType: "json",
            // contentType: "application/json; charset=utf-8",

            success: function(data){

              // alert(data.msg.name);



                   var dataobj=JSON.parse(data.msg);

                if( dataobj=='')
                {
                    $('#test2').html('No hotels available in this city');
                    $('#test').html('');
                }
                else
                {
                    $.each(dataobj,function(i,value)
                    {
                        $('#test').append($('<li/>',{vlaue:value.id,text:value.name}));
                        $('#test2').html('');

                    });
                }



//                    $('#test').html(dataobj[0].name);
//                    alert(dataobj[1].name)
                  //alert();


                //alert('Successfully Saved');


            },
            failure: function(errMsg) {
                alert(errMsg);
            }
        });


    });
});