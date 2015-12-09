@extends('master_layout')

@section('content')

<h2>Kegiatan</h2>
<div class="callout">
	@if (!Request::is('admin/kegiatan'))
		<a href="{{ url('kader/kegiatan/tambah') }}" class="button">Tambah Kegiatan</a>
	@endif
	<table class="full-width">
		<thead>
			@if (Request::is('admin/kegiatan'))
				<th>Kader</th>
			@endif
			<th>Tanggal</th>
			<th>Jumlah Mentoring</th>
			<th>Jumlah Membina</th>
			
			<th>Aksi</th>
		</thead>

		<tbody>
		@forelse ($kegiatan as $k)
			<tr>
				@if (Request::is('admin/kegiatan'))
					<td>{{ $k->kader->nama }}</td>
				@endif
				<td>{{ $k->tanggal }}</td>
				<td>{{ $k->jumlah_mentoring }}</td>
				<td>{{ $k->jumlah_membina }}</td>
				<td>
					<div class="button-group">
						<a href="{{ url('kader/kegiatan/edit/'.$k->id) }}" class="button">Edit</a>
						<a href="{{ url('kader/kegiatan/hapus/'.$k->id) }}" class="button alert">Hapus</a>
					</div>
				</td>
			</tr>
		@empty
			<tr>
				<td colspan="4" class="text-center"> Kosong</td>
			</tr>
		@endforelse
		</tbody>
	</table>
</div>
@stop