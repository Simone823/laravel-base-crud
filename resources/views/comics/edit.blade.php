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
        <label for="title" id="title" name="title">Titolo</label>
        <input type="text" id="title" name="title" placeholder="Inserisci il titolo" value="{{$comic['title']}}">

        {{-- Description --}}
        <label for="description" id="description" name="description">Descrizione</label>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Inserisci una descrizione" resize>{{$comic['description']}}</textarea>

        {{-- Thumb --}}
        <label for="thumb" id="thumb" name="thumb">Immagine</label>
        <input type="text" id="thumb" name="thumb" placeholder="Url Immagine" value="{{$comic['thumb']}}">
        
        {{-- Price --}}
        <label for="price" id="price" name="price">Prezzo</label>
        <input type="text" id="price" name="price" value="{{$comic['price']}}">

        {{-- Series --}}
        <label for="series" id="series" name="series">Collezione</label>
        <input type="text" id="series" name="series" placeholder="Nome collezione" value="{{$comic['series']}}">

        {{-- Sale date --}}
        <label for="sale_date" id="sale_date" name="sale_date">Data di vendita</label>
        <input type="date" id="sale_date" name="sale_date" value="{{$comic['sale_date']}}">

        {{-- Type --}}
        <label for="type" id="type" name="type">Tipologia</label>
        <select name="type" id="type">
            <option value="" hidden>Seleziona una tipologia</option>
            <option value="comic book" {{$comic->type == 'comic book' ? 'selected' : ''}}>comic book</option>
            <option value="graphic novel" {{$comic->type == 'graphic novel' ? 'selected' : ''}}>graphic novel</option>
        </select>

        {{-- Submit --}}
        <button type="submit">Modifica</button>
    </form>

@endsection    