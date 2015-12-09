@extends('master_layout')

@section('content')
<div class="callout">
	{!! Form::open(array('url' => 'kader/biodata')) !!}
	  <h2>Biodata</h2>
	  <label>Kelas
	    <input type="text" name="kelas" value="{{ $biodata->kelas or "" }}">
	  </label>
	  <label>Divisi
	    <input type="text" name="divisi" value="{{ $biodata->divisi or "" }}">
	  </label>
	  <label>Alamat
	    <input type="text" name="alamat" value="{{ $biodata->alamat or "" }}">
	  </label>
	  <label>Tempat Lahir
	    <input type="text" name="tempat_lahir" value="{{ $biodata->tempat_lahir or "" }}">
	  </label>
	  <label>Tanggal Lahir
	    <input type="date" name="tanggal_lahir" value="{{ $biodata->tanggal_lahir or "" }}">
	  </label>
	  <p class="help-text" id="exampleHelpText">Masukkan dengan format : yyyy-mm-dd</p>
	  <input type="submit" value="Simpan" class="button">
	</form>
</div>
@stop