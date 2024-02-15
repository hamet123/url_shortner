<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <head>
        <title>iShortner</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="styles/styles.css">
        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    </head>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="my-5">
                    <div class="container maindiv p-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <h4 class="text-center mb-5">iShortner - URL Shortner</h4>
                                </div>
                            </div>
                        </div>
                        <form action="/" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-10">
                                    <input type="text" name="url" id="url" placeholder="Enter URL here" class="form-control">
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-danger">Shorten</button>
                                </div>
                            </div>
                        </form>
                        <hr class="my-5">
                        <div class="row mt-5">
                            <div class="table-responsive">
                                <table class="table" style="background:transparent;">
                                    @php
                                        $serialNumber = ($urls->currentPage()-1)*$urls->perPage();
                                        $currentHost = $_SERVER['HTTP_HOST'];
                                    @endphp
                                    <thead>
                                        <tr>
                                            <th scope="col">Serial Number</th>
                                            <th scope="col">Shorten URL</th>
                                            <th scope="col">Actual URL</th>
                                            <th scope="col">Visit Count</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @forelse ($urls as $url)
                                                @php
                                                    $serialNumber++;
                                                @endphp
                                                <td>{{ $serialNumber }}</td>
                                                <td> <a target="_blank" class="text-danger" href="{{ $url->uniqueLink}}">{{ $url->shortUrl }}</a> </td>
                                                <td>{{ $url->url }}</td>
                                                <td>{{ $url->visitCount }}</td>
                                        </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3" class="text-center">No URL found</td>
                                                </tr>
                                            @endforelse
                                        </tr>
                                    </tbody>
                                    

                                </table>
                                <div class="text-center" id="pagination">
                                    {{ $urls->links('pagination::bootstrap-5') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
