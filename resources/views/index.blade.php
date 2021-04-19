@extends('layout')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste de tâches') }}
        </h2>
    </x-slot>
<app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="row">

<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table-fixed w-full">

    <thead>
        <tr class="bg-gray-100">
          <td class="border px-4 py-2">N°</td>
          <td class="border px-4 py-2">Titre</td>
          <td class="border px-4 py-2">Description</td>
          <td colspan="2" class="border px-4 py-2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($todolist as $todo)
        <tr>
            <td class="border px-4 py-2">{{$todo->id}}</td>
            <td class="border px-4 py-2">{{$todo->title}}</td>
            <td class="border px-4 py-2">{{$todo->description}}</td>
            <td class="border px-4 py-2"><a href="{{ route('todo.edit', $todo->id)}}" class="bg-blue-700 text-white  py-2 px-4 rounded">Modifier</a></td>
            <td class="border px-4 py-2">
                <form action="{{ route('todo.destroy', $todo->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="bg-red-700 text-white  py-2 px-4 rounded" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
         
</div>
        </div>
    </div>
</x-app-layout>

@endsection


