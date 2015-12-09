@extends('master_layout')

@section('content')

<div class="callout">
	<h2>Hapus Prestasi</h2>

	{!! Form::open(array('url' => 'kader/prestasi/hapus/'.$id, 'method' => 'DELETE')) !!}
		@include('kader.form_prestasi')
	</form>
</div>
@stop