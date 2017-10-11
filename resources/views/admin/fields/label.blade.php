@extends('admin.layout.fields.main')

@section('field')
	{{ $entity->$field }}
@overwrite
