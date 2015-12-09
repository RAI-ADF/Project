@extends('master_layout')

@section('content')

<h2>Kader</h2>
<div class="callout">
	@if (!Request::is('admin/kader'))
		<a href="{{ url('admin/kader/tambah') }}" class="button">Tambah Kader</a>
	@endif
	<table class="full-width">
		<thead>
			<th>Nama</th>
			<th>Hak Akses</th>
			<th>Aksi</th>
		</thead>

		<tbody>
		@forelse ($kader as $k)
			@if($k->id != Auth::user()->id)
			<tr>
				<td>{{ $k->nama }}</td>
				<td>{{ ($k->hak_akses == '0') ? "Super Admin" : (($k->hak_akses == 1) ? "Admin" : "Kader") }}</td>
				<td>
					<div class="button-group">
						<a href="{{ url('admin/kader/ubah_hak_akses/'.$k->id) }}" class="button">Ubah Hak Akses</a>
						<a href="{{ url('admin/kader/hapus/'.$k->id) }}" class="button alert">Hapus</a>
					</div>
				</td>
			</tr>
			@endif
		@empty
			<tr>
				<td colspan="3" class="text-center">Kosong</td>
			</tr>
		@endforelse
		</tbody>
	</table>
</div>
@stop