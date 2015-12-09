<label>Nama
	<input type="text" name="nama" value="{{ $prestasi->nama or "" }}" {{ isset($hapus) ? "disabled" : "" }}>
</label>
<label>Jenis
	<input type="text" name="jenis" value="{{ $prestasi->jenis or "" }}" {{ isset($hapus) ? "disabled" : "" }}>
</label>
<label>Tingkat
	<input type="text" name="tingkat" value="{{ $prestasi->tingkat or "" }}" {{ isset($hapus) ? "disabled" : "" }}>
</label>
<label>Waktu
	<input type="text" name="waktu" value="{{ $prestasi->waktu or "" }}" {{ isset($hapus) ? "disabled" : "" }}>
</label>
<label>Tempat
	<input type="text" name="tempat" value="{{ $prestasi->tempat or "" }}" {{ isset($hapus) ? "disabled" : "" }}>
</label>
<label>Peringkat
	<input type="text" name="peringkat" value="{{ $prestasi->peringkat or "" }}" {{ isset($hapus) ? "disabled" : "" }}>
</label>
<input type="hidden" name="kader_id" value="{{ $prestasi->kader_id or Auth::User()->id }}">
<input type="submit" value="{{ isset($hapus) ? 'Hapus' : "Simpan" }}" class="button {{ isset($hapus) ? "alert" : "" }}">