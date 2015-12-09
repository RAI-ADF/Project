@extends('master_layout')

@section('content')

<h2>Prestasi</h2>
<div class="callout">
	@if (!Request::is('admin/prestasi'))
		<a href="{{ url('kader/prestasi/tambah') }}" class="button">Tambah Prestasi</a>
	@endif
	<table class="full-width">
		<thead>
			@if (Request::is('admin/prestasi'))
				<th>Kader</th>
			@endif
			<th>Nama</th>
			<th>Jenis</th>
			<th>Tingkat</th>
			<th>Waktu</th>
			<th>Tempat</th>
			<th>Peringkat</th>
			<th>Aksi</th>
		</thead>

		<tbody>
		@forelse ($prestasi as $p)
			<tr>
				@if (Request::is('admin/prestasi'))
					<td>{{ $p->kader->nama }}</td>
				@endif
				<td>{{ $p->nama }}</td>
				<td>{{ $p->jenis }}</td>
				<td>{{ $p->tingkat }}</td>
				<td>{{ $p->waktu }}</td>
				<td>{{ $p->tempat }}</td>
				<td>{{ $p->peringkat }}</td>
				<td>
					<div class="button-group">
						<a href="{{ url('kader/prestasi/edit/'.$p->id) }}" class="button">Edit</a>
						<a href="{{ url('kader/prestasi/hapus/'.$p->id) }}" class="button alert">Hapus</a>
					</div>
				</td>
			</tr>
		@empty
			<tr>
				<td colspan="7" class="text-center">Kosong</td>
			</tr>
		@endforelse
		</tbody>
	</table>
</div>
@stop