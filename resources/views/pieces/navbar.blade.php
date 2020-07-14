
	<style>
		.active a {
			color: red;
			text-decoration: none;
		}
	</style>

	<nav>
		<ul>
			<li class="{{ setActive('home') }}"> <a  href="{{ route('home') }}">@lang('Home')</a> </li>
			<li class="{{ setActive('about') }}"> <a href="{{ route('about') }}">@lang('About')</a> </li>
			<li class="{{ setActive('projects.*') }}"> <a href="{{ route('projects.index') }}">@lang('Projects')</a> </li>
			<li class="{{ setActive('contacto') }}"> <a href="{{ route('contacto') }}">@lang('Contacto')</a> </li>
		</ul>
	</nav>
	<hr>
