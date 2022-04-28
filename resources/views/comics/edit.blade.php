@extends('layouts.default')

@section('headeTilte', 'Modifica comic')

@section('mainContent')

    {{-- Table comic --}}
    <table>

        {{-- Table header --}}
        <tr>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>thumb</th>
            <th>price</th>
            <th>series</th>
            <th>sale_date</th>
            <th>type</th>
        </tr>

        <tr>
            <td>
                {{$comic['id']}}
            </td>

            <td>
                {{$comic['title']}}
            </td>

            <td>
                {{$comic['description']}}
            </td>

            <td>
                <img src="{{$comic['thumb']}}" alt="">
            </td>

            <td>
                {{$comic['price']}}
            </td>

            <td>
                {{$comic['series']}}
            </td>

            <td>
                {{$comic['sale_date']}}
            </td>

            <td>
                {{$comic['type']}}
            </td>
        </tr>

    </table>


    {{-- Form  --}}
    <form action="{{route('comics.update', $comic)}}" method="POST">
        @csrf
        @method('PUT')

        {{-- Titile --}}
        <div class="title">
            <label for="title" id="title" name="title">Titolo</label>
            <input type="text" id="title" value="{{$comic['title']}}" class="@error('title') is-invalid @enderror" name="title" placeholder="Inserisci il titolo">
    
            {{-- Error validation --}}
            @error('title')
                <div class="alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Description --}}
        <div class="description">
            <label for="description" id="description" name="description">Descrizione</label>
            <textarea name="description" 
            class="@error('description') is-invalid @enderror" 
            id="description" cols="30" rows="10" 
            placeholder="Inserisci una descrizione" resize>{{$comic['description']}}</textarea>

            {{-- Error validation --}}
            @error('description')
                <div class="alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Thumb --}}
        <div class="thumb">
            <label for="thumb" id="thumb" name="thumb">Immagine</label>
            <input type="text" id="thumb" value="{{$comic['thumb']}}" class="@error('thumb') is-invalid @enderror" name="thumb" placeholder="Url Immagine">

            {{-- Error validation --}}
            @error('thumb')
                <div class="alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        {{-- Price --}}
        <div class="price">
            <label for="price" id="price" name="price">Prezzo</label>
            <input type="text" id="price" value="{{$comic['price']}}" class="@error('price') is-invalid @enderror" name="price">

            {{-- Error validation --}}
            @error('price')
                <div class="alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Series --}}
        <div class="series">
            <label for="series" id="series" name="series">Collezione</label>
            <input type="text" id="series" value="{{$comic['series']}}" class="@error('series') is-invalid @enderror" name="series" placeholder="Nome collezione">

            {{-- Error validation --}}
            @error('series')
                <div class="alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Sale date --}}
        <div class="sale_date">
            <label for="sale_date" id="sale_date" name="sale_date">Data di vendita</label>
            <input type="date" id="sale_date" value="{{$comic['sale_date']}}" class="@error('sale_date') is-invalid @enderror" name="sale_date">

            {{-- Error validation --}}
            @error('sale_date')
                <div class="alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Type --}}
        <div class="type">
            <label for="type" id="type" name="type">Tipologia</label>
            <select name="type" class="@error('type') is-invalid @enderror" id="type">
                <option value="" hidden>Seleziona una tipologia</option>
                <option value="comic book" {{$comic['type'] == 'comic book' ? 'selected' : ''}}>comic book</option>
                <option value="graphic novel" {{$comic['type'] == 'graphic novel' ? 'selected' : ''}}>graphic novel</option>
            </select>

            {{-- Error validation --}}
            @error('type')
                <div class="alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        {{-- Submit --}}
        <button type="submit">Modifica</button>
    </form>

@endsection    