@extends('master_layout')

@section('content')

<div class="callout">
	<h2>Edit Prestasi</h2>

	{!! Form::open(array('url' => 'kader/prestasi/edit/'.$id)) !!}
		@include('kader.form_prestasi')
	</form>
</div>
@stop