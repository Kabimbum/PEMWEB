@php
    $footer = \App\Models\Footer::first();
@endphp

<footer class="section-sm bg-tertiary">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Service</h5>
					<ul class="list-unstyled">
					 <a wire:navigate href="{{ route ('home') }}"> {{$footer->label ?? ''}}</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Quick Links</h5>
					<ul class="list-unstyled">
					<a wire:navigate href="{{ route ('home') }}"> {{$footer->label ?? ''}}</a>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Other Links</h5>
					<ul class="list-unstyled">
					<a wire:navigate href="{{ route ('home') }}"> {{$footer->label ?? ''}}</a>x	
                        </li>
					</ul>
				</div>
			</div>			
		</div>
		
	</div>
</footer>

