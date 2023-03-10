<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Company Crud</title>
    @vite('resources/js/app.js')

</head>

<body>
    <div class="pull-right mb-2">
        <a class="btn btn-success" href="{{ url('/dbtest/insert') }}"> Crea nuova compagnia</a>
    </div>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>CRUD DB</h2>
                </div>

            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        @if ($message = Session::get('error'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>S.No</th>
                <th>Company Name</th>
                <th>Company Email</th>
                <th>Company Address</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->id }}</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->address }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('/dbtest/showqb', $company->id) }}">Mostra</a>
                        <a class="btn btn-primary" href="{{ route('companies.edit', $company->id) }}">Edit</a>
                        <form action="{{ url('/dbtest/delete', $company->id) }}" method="Post"
                            onSubmit="return areyousure();">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
</body>

</html>