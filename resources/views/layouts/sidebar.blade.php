<div id="app">
	<div id="sidebar" class="active">
		<div class="sidebar-wrapper active">
			<div class="sidebar-header">
				<div class="d-flex justify-content-between">
					<div class="toggler">
	                    <a href="#" class="sidebar-hide d-xl-none d-block" ><i class="bi bi-x bi-middle"></i></a>
	                </div>
				</div>
			</div>
			@php($role = \Auth::user()->role)
			<div class="sidebar-menu">
				<ul class="menu">
					<div class="sidebar-title">
						<h1>Menu</h1>
					</div>
					@if($role == 2 || $role == 1)
						<li class="sidebar-item">
							<a href="@if($role == 1){{ route('warga.index') }}@else{{ route('rw.index') }}@endif" class="sidebar-link">
								<span>{{ $role == 1 ? 'Data Warga' : 'Data RW' }}</span>
							</a>
						</li>
					@endif
					@if($role == 3)
						<li class="sidebar-item">
							<a href="{{ route('rt.index') }}" class="sidebar-link">
								<span>{{ 'Data RT' }}</span>
							</a>
						</li>
					@endif
					@if( $role == 1)
						<li class="sidebar-item">
							<a href="{{ route('user.index') }}" class="sidebar-link">
								<span>Data User RT/RW</span>
							</a>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</div>
	<div id="main">
		<header class="mb-3">
			<a href="#" class="burger-btn d-block d-xl-none">
				<i class="bi bi-justify fs-3"></i>
			</a>
		</header>
		@yield('content')
	</div>
</div>