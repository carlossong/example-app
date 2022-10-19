<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuários') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="shadow-sm overflow-hidden my-2">
                        <table class="border-collapse table-auto w-full text-sm">
                            <thead>
                                <tr>
                                    <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-700 text-left">#</th>
                                    <th class="border-b font-medium p-4 pt-0 pb-3 text-slate-700 text-left">Nome</th>
                                    <th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-700 text-left">Email</th>
                                    <th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-700 text-left">Criado</th>
                                    <th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-700 text-left">Editado</th>
                                    <th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-700 text-center">Ações</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($users as $user)
                                    <tr class="hover:bg-slate-100">
                                        <td class="border-b border-slate-100 p-4 text-slate-700 text-slate-400 text-center">{{ $user->id }}</td>
                                        <td class="border-b border-slate-100 p-4 text-slate-700 text-slate-400 text-left">{{ $user->name }}</td>
                                        <td class="border-b border-slate-100 p-4 text-slate-700 text-slate-400 text-left">{{ $user->email }}</td>
                                        <td class="border-b border-slate-100 p-4 text-slate-700 text-slate-400 text-left">{{ $user->created_at }}</td>
                                        <td class="border-b border-slate-100 p-4 text-slate-700 text-slate-400 text-left">{{ $user->updated_at }}</td>
                                        <td class="border-b border-slate-100 p-4 text-slate-700 text-slate-400 text-center">
                                            <a href="" class="hover:text-gray-500">Editar</a>
                                            <a href="" class="hover:text-red-500">Apagar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-4">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
