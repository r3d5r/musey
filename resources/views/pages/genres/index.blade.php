<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Жанры') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-primary-button class="ms-3">
            <a href="{{route('genres.create')}}">
                Добавить новый жанр
            </a>
        </x-primary-button>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">
                    @foreach($genres as $genre)
                        <div class="row">
                            <div class="col-sm-4">
                                {{$genre->name}}
                            </div>
                            <div class="col-sm-4 text-end">
                                <button class="btn btn-sm btn-warning">
                                    Редактрировать
                                </button>
                            </div>
                            <div class="col-sm-4 text-center">
                                <form action={{route('genres.destroy', $genre->id)}}>


                                </form>
                                <button class="btn btn-sm btn-danger">
                                    Удалить
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
