@extends('admin.layout.fields.main')

@section('field')
	{{ Form::checkbox($field, null, old($field, (isset($entity) ? ($entity->$field == 1 ? true : false) : false))) }}
@overwrite
