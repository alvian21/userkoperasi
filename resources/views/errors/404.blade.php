@extends('errors.minimal')

@if (isset($data['name']))
@section('title', $data['name'])
@section('code', '404')
@section('message', $data['name'])
@else
@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
@endif

