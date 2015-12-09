@extends('master_layout')

@section('content')

<div class="callout">
	<h2>Edit Kegiatan</h2>

	{!! Form::open(array('url' => 'kader/kegiatan/edit/'.$id)) !!}
		@include('kader.form_kegiatan')
	</form>
</div>
@stop