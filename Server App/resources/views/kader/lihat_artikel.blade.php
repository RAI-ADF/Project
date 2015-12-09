@extends('master_layout')

@section('content')

<div class="callout">
	<h2>{{ $artikel->judul }}</h2>
	<span class="label secondary">{{ $artikel->kader->nama }}</span>
	<span class="label">{{ $artikel->created_at }}</span>
	<p>{{ $artikel->isi }}</p>
</div>
@stop