<footer class="footer border-top">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4">
				<div class="copyright">{{ __('all_rights_reserved') }} | &copy; {{ config("app.name") }} - {{ date('Y') }}</div>
			</div>
			<div class="col">
				<div class="footer-links text-right">
					<a href="{{ url('info/about') }}">{{ __('about_us') }}</a> | 
					<a href="{{ url('info/faq') }}">{{ __('help_and_faq') }}</a> |
					<a href="{{ url('info/contact') }}">{{ __('contact_us') }}</a>  |
					<a href="{{ url('info/privacypolicy') }}">{{ __('privacy_policy') }}</a> |
					<a href="{{ url('info/termsandconditions') }}">{{ __('terms_and_conditions') }}</a>
				</div>
			</div>
			
	<div class="col-sm-2">
		<?php 
			$langs = config('locales'); 
			$currentLang = App::getLocale();
		?>
		
		<div class="dropup">
			{{ __('language') }}:
			<button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<?php echo $langs[$currentLang] ?>
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<?php 
					foreach($langs as $code=>$title){
						?>
							<a class="dropdown-item" href="<?php print_link("info/changelocale/$code") ?>">
								<?php echo $title ?>
							</a>
						<?php
					}
				?>
			</div>
		</div>
	</div>

		</div>
	</div>
</footer>