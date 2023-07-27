<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css?v=3.2.0">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="antialiased">
    <div class="content-wrapper">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table">
                        <thead>
                            <tr>
                                <th scope="col">Ranking</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Negara</th>
                                <th scope="col">Kompetisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                            <tr>
                                <th scope="row">{{ $item->Ranking }}</th>
                                <td>{{ $item->Name }}</td>
                                <td>{{ $item->Country }}</td>
                                <td>{{ $item->Competition }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


        </div>

    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    {{-- cdn datatable --}}
    

    <script>
        $(document).ready( function () {
            $('#datatable').DataTable();
        } );
    </script>
</body>

</html>