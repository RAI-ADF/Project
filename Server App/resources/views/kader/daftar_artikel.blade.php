@extends('master_layout')

@section('content')

<h2>Artikel</h2>
<div class="callout">
	@if (!Request::is('admin/artikel'))
		<a href="{{ url('kader/artikel/tambah') }}" class="button">Tambah Artikel</a>
	@endif
	<table class="full-width">
		<thead>
			@if (Request::is('admin/artikel'))
				<th>Kader</th>
			@endif
			<th>Judul</th>
			<th>Tanggal</th>
			<th>Aksi</th>
		</thead>

		<tbody>
		@forelse ($artikel as $a)
			<tr>
				@if (Request::is('admin/artikel'))
					<td>{{ $a->kader->nama }}</td>
				@endif
				<td>{{ $a->judul }}</td>
				<td>{{ $a->created_at }}</td>
				<td>
					<div class="button-group">
						<a href="{{ url('kader/artikel/lihat/'.$a->id) }}" class="button secondary">Lihat</a>
						<a href="{{ url('kader/artikel/edit/'.$a->id) }}" class="button">Edit</a>
						<a href="{{ url('kader/artikel/hapus/'.$a->id) }}" class="button alert">Hapus</a>
					</div>
				</td>
			</tr>
		@empty
			<tr>
				<td colspan="3" class="text-center">Kosong</td>
			</tr>
		@endforelse
		</tbody>
	</table>
</div>
@stop