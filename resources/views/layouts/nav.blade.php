<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">

			<!-- Collapsed Hamburger -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<!-- Branding Image -->
			<a class="navbar-brand" href="{{ url('/') }}">TRAVEL BLOG</a>
			
		</div>

		<div class="collapse navbar-collapse" id="app-navbar-collapse">
		
			<!-- Left Side Of Navbar -->
			<ul class="nav navbar-nav">
				&nbsp;	
                
				<!-- Posts Project Navbar -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Posts <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/posts">Index</a></li>
						<li><a href="/posts/create">Create</a></li>
						<li><a href="/tags">Setup Test Environment</a></li>
					</ul>
                </li>		
				<li><a href="/articles">News</a></li>					
				<li><a href="/about">About</a></li>
				<li><a href="/contacts">Contacts</a></li>
			</ul>

			<!-- Right Side Of Navbar -->
			<ul class="nav navbar-nav navbar-right">
			
				@if (Auth::guest())
					<!-- Authentication Links -->
					<li><a href="{{ url('/login') }}">Login</a></li>
					<li><a href="{{ url('/register') }}">Register</a></li>
				@else
					@if (Auth::user()->isAdmin())
						<!-- Tags Administration -->
						<li><a href="/tags">Tags</a></li>

						<!-- Users Administration -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Users <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="/users">Index</a></li>
								<li><a href="/users/create">Create</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">About User Administration </a></li>
							</ul>
						</li>						
					@else
						<!-- Edit Profile -->
						<li><a href="/users/{{ Auth::id() }}/edit">Profile</a></li>
					@endif
				
				
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{ url('/logout') }}"
									onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
									Logout
								</a>

								<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
                @endif
			</ul>
		</div>
	</div>
</nav>
