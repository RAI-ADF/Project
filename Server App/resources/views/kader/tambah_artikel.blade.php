@extends('master_layout')

@section('content')

<div class="callout">
	<h2>Tambah Artikel</h2>

	{!! Form::open(array('url' => 'kader/artikel/tambah')) !!}
		@include('kader.form_artikel')
	</form>
</div>
@stop