@if ($errors->any())
	<p style="padding:10px; color:red;">
    	@foreach ($errors->all() as $error)
        	{{ $error }}<br>
        @endforeach
    </p>
@endif
