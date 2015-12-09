<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Aplikasi Kaderisasi Al-Fath</title>
	<link rel="stylesheet" href="{{ asset('css/foundation.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body>

	<nav>
		<div class="top-bar">
		  <div class="top-bar-left">
		    <ul class="dropdown menu">
		      <li class="menu-text">Aplikasi Kaderisasi Al-Fath</li>
		    </ul>
		  </div>
		  <div class="top-bar-right">
		    <ul class="dropdown menu" data-dropdown-menu>
				<li class="has-submenu">
			        <a href="#">{{ Auth::user()->nama }} ({{ (Auth::user()->hak_akses == '0') ? "Super Admin" : ((Auth::user()->hak_akses == 1) ? "Admin" : "Kader") }})</a>
			        <ul class="submenu menu" data-submenu>
			          <li><a href="{{ url('auth/logout') }}">Logout</a></li>
			        </ul>
		      	</li>
		    </ul>
		  </div>
		</div>
	</nav>


	<div class="row">
		<div class="small-12 medium-3 columns">
			@section('sidebar')
			<ul class="vertical menu" data-accordion-menu>
			  <li><a href="{{ url('kader') }}">Home</a></li>
			  <li>
			    <a href="#">Artikel</a>
			    <ul class="menu vertical nested {{ (Request::is('kader/artikel') or Request::is('kader/artikel/*')) ? 'is-active' : '' }}">
			      <li>
			        <a href="{{ url('kader/artikel/tambah') }}">Buat Artikel</a>
			        <a href="{{ url('kader/artikel') }}">Daftar Artikel</a>
			      </li>
			  </ul>
			  </li>
			  <li>
			    <a href="#">Kegiatan</a>
			    <ul class="menu vertical nested {{ (Request::is('kader/kegiatan') or Request::is('kader/kegiatan/*')) ? 'is-active' : '' }}">
			      <li><a href="{{ url('kader/kegiatan/tambah') }}">Tambah Kegiatan</a></li>
			      <li><a href="{{ url('kader/kegiatan') }}">Lihat Kegiatan</a></li>
			    </ul>
			  </li>
			  <li>
			    <a href="#">Prestasi</a>
			    <ul class="menu vertical nested {{ (Request::is('kader/prestasi') or Request::is('kader/prestasi/*')) ? 'is-active' : '' }}">
			      <li><a href="{{ url('kader/prestasi/tambah') }}">Tambah Prestasi</a></li>
			      <li><a href="{{ url('kader/prestasi') }}">Lihat Prestasi</a></li>
			    </ul>
			  </li>

			  @if (Auth::user()->hak_akses < 2)
			  <li>
			    <a href="#">Admin</a>
			    <ul class="menu vertical nested is-active">
			      @if (Auth::user()->hak_akses == 0)
			      	<li><a href="{{ url('admin/kader') }}">Kelola Kader</a></li>
			      @endif
			      <li><a href="{{ url('admin/artikel') }}">Kelola Artikel</a></li>
			      <li><a href="{{ url('admin/kegiatan') }}">Kelola Kegiatan</a></li>
			      <li><a href="{{ url('admin/prestasi') }}">Kelola Prestasi</a></li>
			    </ul>
			  </li>
			  @endif
			</ul>
			@show
		</div>

		<div class="small-12 medium-9 columns">
			@section('content')
			@show
		</div>
	</div>
	
	<script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendor/what-input.min.js') }}"></script>
    <script src="{{ asset('js/foundation.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>