<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Enrolled Subjects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   <a href="{{ route ('add-enrolledsubject')}}">add Enrolled Subjects</a>
                   <h6>List of Subjects</h6>
                   <table class="border-separate border-spacing-5">
                    <thead>
                        <tr>
                            <th>ID Sub. No.</th>
                            <th>Subject Name</th>
                            <th>Code No.</th>
                            <th>description</th>
                            <th>unit</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($EnrolledSubject as $ensub)
                        <tr>
                            <td>{{ $ensub->esNo}}</td>
                            <td>{{ $ensub->Subject}} </td>
                            <td>{{ $ensub->description}}</td>
                            <td>{{ $ensub->unit}}</td>
                            <td>
                            <a class="mt-4 bg-red-200 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded" href="{{ route('students') }}">back</a>
                            </td>                        
                        </tr>
                        @endforeach
                    </tbody>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
