@extends('master_layout')

@section('content')

<div class="callout">
	<h2>Tambah Prestasi</h2>

	{!! Form::open(array('url' => 'kader/prestasi/tambah')) !!}
		@include('kader.form_prestasi')
	</form>
</div>
@stop