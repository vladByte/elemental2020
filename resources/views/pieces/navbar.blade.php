
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
			<li class="{{ setActive('chat') }}"> <a href="{{ route('chat.index') }}">@lang('Chat')</a> </li>
			<li class="{{ setActive('Mercado Pago') }}"> <a href="{{ route('pago.index') }}">@lang('Mercado Pago')</a> </li>
		</ul>
	</nav>
	<hr>
