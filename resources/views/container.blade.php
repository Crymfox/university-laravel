<!-- container for the content to center it with bootstrap -->

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<div class="
    container
    d-flex
    flex-column
    justify-content-center
    align-items-center
">
    <nav class="navbar navbar-light bg-primary w-100" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('products.list') }}">Produits</a>
            <a class="navbar-brand" href="{{ route('products.create') }}">Ajouter un produit</a>
        </div>
    </nav>
    @yield('list')
    @yield('create')
    @yield('edit')
    @yield('destroy')
</div>