@extends('master_layout')

@section('content')

<div class="callout">
	<h2>Hapus Kegiatan</h2>

	{!! Form::open(array('url' => 'kader/kegiatan/hapus/'.$id, 'method' => 'DELETE')) !!}
		<label>Tanggal
			<input type="text" name="tanggal" value="{{ $kegiatan->tanggal or "" }}" disabled>
		</label>
		<p class="help-text" id="exampleHelpText">Format : yyyy-mm-dd</p>
		<label>Jumlah Mentoring
			<input type="number" name="jumlah_mentoring" value="{{ $kegiatan->jumlah_mentoring or "" }}" disabled>
		</label>
		<label>Jumlah Membina
			<input type="number" name="jumlah_membina" value="{{ $kegiatan->jumlah_membina or "" }}" disabled>
		</label>
		<input type="submit" class="button alert" value="Hapus">
	</form>
</div>
@stop