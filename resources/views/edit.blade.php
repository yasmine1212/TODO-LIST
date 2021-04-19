@extends('layout')

@section('content')
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('    Modifier une tache') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card uper">
              <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div><br />
                @endif

                <form method="post" action="{{ route('todo.update', $todo->id ) }}">
                  <div class="col-span-6 sm:col-span-4">
                    @csrf
                    @method('PATCH')
                    <label for="marque">Title :</label>
                    <x-jet-input type="text" class="block mt-1 w-full" name="title" value="{{ $todo->title }}" />
                  </div>

                  <div class="col-span-6 sm:col-span-4">
                    <label for="cases">Description :</label>
                    <x-jet-input type="text" class="block mt-1 w-full" name="description" value="{{ $todo->description }}" />
                  </div>
                  <div class="mt-4">
                           <x-jet-button class="mb-4">
                                {{ __('Modifier') }}
                            </x-jet-button>
                          </div>
                </form>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div>

  </div>
</x-app-layout>

@endsection