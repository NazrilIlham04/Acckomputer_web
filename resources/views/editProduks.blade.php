@extends('layouts.template')
@livewireStyles
@section('content')

@livewire('edit-produk',['id' => $id])
@livewireScripts
@endsection

