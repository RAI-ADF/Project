@extends('master_layout')

@section('content')

<div class="callout">
	<h2>Hapus Artikel</h2>

	{!! Form::open(array('url' => 'kader/artikel/hapus/'.$id, 'method' => 'DELETE')) !!}
		@include('kader.form_artikel')
	</form>
</div>
@stop