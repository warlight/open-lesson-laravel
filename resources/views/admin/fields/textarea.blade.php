@extends('admin.fields.main')

@section('field')
	<textarea rows="{{ isset($rows) ? $rows : 5 }}" name="{{ $field }}" class="form-control">{{ old($field, (isset($entity) ? $entity->$field : '')) }}</textarea>
@overwrite
