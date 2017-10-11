<div class="form-group row @if($errors->get($field)) has-error @endif">
	<label for="{{ $field }}" class="col-sm-2 col-form-label">{{ $name }}</label>
	<div class="col-sm-10">
		<span class="warning">
			@foreach ($errors->get($field) as $message)
				{!! $message !!}
			@endforeach
		</span>
	@yield('field')
	</div>
</div>
