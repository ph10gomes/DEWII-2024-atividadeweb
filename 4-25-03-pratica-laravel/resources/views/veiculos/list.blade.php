<x-layout>

    <table class="table table-striped table-bordered">

        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">FABRICANTE</th>
                <th scope="col">MODELO</th>
                <th scope="col">CAVALOS</th>
                <th scope="col">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lista as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->fabricante }}</td>
                    <td>{{ $v->modelo }}</td>
                    <td>{{ $v->cavalos }}</td>
                    
                    <td>
                        <form action="/veiculos/edit" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $v->id }}">
                           
                            <button class="btn btn-outline-warning">edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="/veiculos/delete" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $v->id }}">
                            <button class="btn btn-outline-danger">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>

