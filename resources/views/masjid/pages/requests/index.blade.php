@extends('masjid.layouts.app')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            @include('masjid.layouts.components.table')
        </div>
    </div>
</div>


@endsection
@section('scripts')
<script>
	$(document).ready(function(){
		$(".dltBtn").on('click',function(){

			var id = $(this).data('id');
	
		   $.ajax({
		   	url:'/masjid/requests/'+id,
		   	type:'delete',
		 data:{_token: "{{ csrf_token() }}",id:id},
		 success:function(msg){
		 	console.log(msg)

		 },
		 error:function(err){
		 	console.log();

		 }
		   })
		})
	})
</script>
@endsection