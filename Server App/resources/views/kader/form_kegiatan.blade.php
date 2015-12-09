<label>Tanggal
	<input type="text" name="tanggal" value="{{ $kegiatan->tanggal or "" }}">
</label>
<p class="help-text" id="exampleHelpText">Format : yyyy-mm-dd</p>
<label>Jumlah Mentoring
	<input type="number" name="jumlah_mentoring" value="{{ $kegiatan->jumlah_mentoring or "" }}">
</label>
<label>Jumlah Membina
	<input type="number" name="jumlah_membina" value="{{ $kegiatan->jumlah_membina or "" }}">
</label>
<input type="submit" value="Simpan" class="button">