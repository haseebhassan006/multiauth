@extends('masjid.layouts.app')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
@include('masjid.layouts.components.add')
</div>
</div>
</div>

@endsection
@section('scripts')
<script>
$(document).ready(function(){
        $.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
        $("#addRequestForm").on('submit',function(e){
        e.preventDefault();
var formData = new FormData(this);

$.ajax({
                type:'POST',
                url:'/masjid/requests',
                data:formData,
                processData: false,
                contentType: false,

                success: function( msg ) {
                    alert(msg)
                },
                error:function(response){
                    if(response.status === 422){

                        var errors = response.responseJSON.errors
                        $.each(errors, function( key, value) {
                          alert(value)
        });

                    }



                }
            });
    });

  $("#updateRequestForm").on('submit',function(e){
        e.preventDefault();
        var formData = new FormData(this);
        var id = $("#id").val()
        $.ajax({
            type:'put',
            url:'/masjid/requests/'+id,
            data:formData,
            processData: false,
            contentType: false,
            success: function( msg ) {
                    alert(msg)
                
                },
            error:function(response){
                if(response.status === 422){
                    var errors = response.responseJSON.errors
                    $.each(errors, function( key, value) {
                    alert(value)
                    });

                }



            }
   
        });

  })
})

</script>
@endsection
