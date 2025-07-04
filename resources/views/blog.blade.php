<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    {{-- <h1>ini adalah halaman blog {{ $blogs }}</h1> --}}
    {{-- <h1>ini adalah halaman blog</h1> --}}

    <div class="container">
        <div class="mt-5">
            <h1 class="text-center">Blog List</h1>

            <div class="table-responsive">
                <table class="table table table-striped table-hover">
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Action</th>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ ($blogs->currentpage()-1) * $blogs->perpage() + $loop->index + 1 }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>Edit | Delete</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{ $blogs->links() }}

            {{-- <ol>
                @foreach ($blogs as $blog)
                    <li> --}}
                        {{-- memanggil variabel $blog terdapat perintah kunci "judul/title" dari table blogs dalam SQL --}}
                        {{-- {{ $blog->title }}
                    </li>
                @endforeach
            </ol> --}}
        </div>
    </div>

    {{-- <h1>Blog List</h1>
    <ol>
        @foreach ($blogs as $blog)
            <li> --}}
                {{-- memanggil variabel $blog terdapat perintah kunci "judul/title" dari table blogs dalam SQL --}}
                {{-- {{ $blog->title }}
            </li>
        @endforeach
    </ol> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
