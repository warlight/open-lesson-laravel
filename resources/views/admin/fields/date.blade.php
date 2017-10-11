@extends('admin.layout.fields.main')

@section('field')
	{{ Form::date($field, old($field, (isset($entity) ? $entity->$field : '')), ['class' => 'form-control']) }}
@overwrite
