@layout('layouts.default')

@section('content')
	<div class="row">
			<h1>Settings</h1>
	</div>

	@include('layouts.alert_msg')
	@yield('alert_msg')

	<div class="row">
		<ul class="nav-tabs">
			<li class="active">
				{{ HTML::link('#', 'Index Settings') }}
			</li>
			<li>
				{{ HTML::link_to_route('settings_jenissurat', 'Daftar Jenis Surat') }}
			</li>
			<li>
				{{ HTML::link_to_route('settings_disposisi', 'Daftar Disposisi') }}
			</li>
			<li>
				{{ HTML::link_to_route('settings_petunjuk', 'Daftar Petunjuk') }}
			</li>
			<li>
				{{ HTML::link_to_route('settings_user', 'Daftar User Account') }}
			</li>
			<li>
				{{ HTML::link_to_route('settings_konfigurasi', 'Konfigurasi Agenda Surat') }}
			</li>
			<li>
				{{ HTML::link_to_route('settings_liberation', 'Data Liberation') }}
			</li>
	  </ul>
	</div>

	@include('partial.settings.settings_index')
	@yield('settings_index')

@endsection