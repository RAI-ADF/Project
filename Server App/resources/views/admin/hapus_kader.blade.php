@extends('master_layout')

@section('content')

<div class="callout">
	<h2>Hapus Kader</h2>

	{!! Form::open(array('url' => 'admin/kader/hapus/'.$id, 'method' => 'DELETE')) !!}
		<label>Nama
			<input type="text" name="nama" value="{{ $kader->nama or "" }}" disabled>
		</label>
		<label>Hak Akses
			<input type="text" name="hak_akses" value="{{ ($kader->hak_akses == '0') ? "Super Admin" : (($kader->hak_akses == 1) ? "Admin" : "Kader") }}" disabled>
		</label>
		<input type="submit" value="Hapus" class="button alert">
	</form>
</div>
@stop