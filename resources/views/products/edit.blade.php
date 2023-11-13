@extends('container')

@section('edit')
    <div class="content">
        <h1>Edition d'un produit</h1>
        <form action="
            {{ route('products.update', $product->id) }}
        " method="POST">
            @csrf
            @method('PUT')
            <label class="form-label">Nom:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
            <br>
            <label class="form-label">Détail:</label>
            <textarea name="details" id="details" cols="30" rows="2" class="form-control">{{ $product->details }}</textarea>
            <br>
            <label class="form-label">Catégorie</label>
            <select name="category" id="category" class="form-select">
                <option value="" @if($product->category == '') selected @endif>Toutes les catégories</option>
                <option value="option1" @if($product->category == 'option1') selected @endif>Catégorie 1</option>
                <option value="option2" @if($product->category == 'option2') selected @endif>Catégorie 2</option>
                <option value="option3" @if($product->category == 'option3') selected @endif>Catégorie 3</option>
            </select>
            <br>
            <label>Points de vente:</label>
            <select name="point_of_sale" id="point_of_sale" class="form-select" size="3">
                <option value="option1" @if($product->point_of_sale == 'option1') selected @endif>Point de vente sokra</option>
                <option value="option2" @if($product->point_of_sale == 'option2') selected @endif>Point de vente ariana</option>
                <option value="option3" @if($product->point_of_sale == 'option3') selected @endif>Zen home</option>
            </select>
            <button type="submit" class="btn btn-primary">Modifier</button>
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </form>
    </div>
@endsection