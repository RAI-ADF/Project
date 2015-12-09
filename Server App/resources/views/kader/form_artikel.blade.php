<label>Judul
	<input type="text" name="judul" value="{{ $artikel->judul or "" }}" {{ isset($hapus) ? "disabled" : "" }}>
</label>
<label>Isi
	<textarea type="text" name="isi" row="10" {{ isset($hapus) ? "disabled" : "" }}>{{ $artikel->isi or "" }}</textarea>
</label>
<input type="hidden" name="kader_id" value="{{ $artikel->kader_id or Auth::User()->id }}">
<input type="submit" value="{{ isset($hapus) ? 'Hapus' : "Simpan" }}" class="button {{ isset($hapus) ? "alert" : "" }}">