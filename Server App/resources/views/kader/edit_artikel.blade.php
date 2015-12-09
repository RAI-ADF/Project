@extends('master_layout')

@section('content')

<div class="callout">
	<h2>Edit Artikel</h2>

	{!! Form::open(array('url' => 'kader/artikel/edit/'.$id)) !!}
		@include('kader.form_artikel')
	</form>
</div>
@stop