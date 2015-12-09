@extends('master_layout')

@section('content')

<div class="callout">
	<h2>Tambah Kegiatan</h2>

	{!! Form::open(array('url' => 'kader/kegiatan/tambah')) !!}
		@include('kader.form_kegiatan')
	</form>
</div>
@stop