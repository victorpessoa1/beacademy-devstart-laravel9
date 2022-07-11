    @extends('template.users')
    @section('title', $title)
    @section('body')
    <div class="container">
            <h1>{{$title}}</h1>
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Data de cadastro</th>
                        <th scope="col">Visualizar</th>
                        <th scope="col">Deletar</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                        <td>
                            <a href=" {{ route('users.edit', $user->id) }}" class="btn btn-warning text-white">Editar</a>
                        </td>

                        <td>
                            <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger text-white">Deletar</button>

                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endsection
