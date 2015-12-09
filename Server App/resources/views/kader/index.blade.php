@extends('master_layout')

@section('content')
<div class="row">
	<div class="small-12">
		<h1>Selamat Datang</h1>
		<div class="callout">
			<h2>User Info</h2>
			<table class="full-width">
				<tbody>
					<tr>
						<td>Nama</td>
						<td>{{ Auth::user()->nama }}</td>
					</tr>

					<tr>
						<td>Hak Akses</td>
						<td>{{ (Auth::user()->hak_akses == '0') ? "Super Admin" : ((Auth::user()->hak_akses == 1) ? "Admin" : "Kader") }}</td>
					</tr>
				</tbody>
			</table>
			
			<h2>Biodata</h2>
			@if (Auth::user()->biodata)

			<table class="full-width">
				<tbody>
					<tr>
						<td>Kelas</td>
						<td>{{ Auth::user()->biodata->kelas }}</td>
					</tr>

					<tr>
						<td>Divisi</td>
						<td>{{ Auth::user()->biodata->divisi }}</td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td>{{ Auth::user()->biodata->alamat }}</td>
					</tr>

					<tr>
						<td>Tempat, Tanggal Lahir</td>
						<td>{{ Auth::user()->biodata->tempat_lahir }}, {{ Auth::user()->biodata->tanggal_lahir }}</td>
					</tr>
				</tbody>
			</table>
			<a href="{{ url('kader/biodata') }}" class="button">Ubah Biodata</a>

			@else

			<p>Biodata Kosong.....</p>
			<a href="{{ url('kader/biodata') }}" class="button">Isi Biodata</a>

			@endif
			
		</div>
	</div>
</div>
@stop