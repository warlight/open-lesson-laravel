@extends('admin.layout.fields.main')

@section('field')
	@if(isset($entity->$field) && !empty($entity->$field))
		<img src="{{ Storage::url($entity->$field) }}" class="img-thumbnail" width="304" height="236">
	@endif
	<div class="btn btn-default btn-file">
		<i class="fa fa-paperclip"></i> {{ $name }}
		{{ Form::file($field) }}
	</div>

@overwrite
