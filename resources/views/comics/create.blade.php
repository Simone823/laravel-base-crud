@extends('layouts.default')

@section('headeTilte', 'Aggiungi nuovo comic')

@section('mainContent')

    {{-- Form  --}}
    <form action="{{route('comics.store')}}" method="POST">
        @csrf

        {{-- Titile --}}
        <div class="title">
            <label for="title" id="title" name="title">Titolo</label>
            <input type="text" id="title" value="{{old('title')}}" class="@error('title') is-invalid @enderror" name="title" placeholder="Inserisci il titolo">
    
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
            placeholder="Inserisci una descrizione" resize>{{old('description')}}</textarea>

            {{-- Error validation --}}
            @error('description')
                <div class="alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Thumb --}}
        <div class="thumb">
            <label for="thumb" id="thumb" name="thumb">Immagine</label>
            <input type="text" id="thumb" value="{{old('thumb')}}" class="@error('thumb') is-invalid @enderror" name="thumb" placeholder="Url Immagine">

            {{-- Error validation --}}
            @error('thumb')
                <div class="alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        {{-- Price --}}
        <div class="price">
            <label for="price" id="price" name="price">Prezzo</label>
            <input type="text" id="price" value="{{old('price')}}" class="@error('price') is-invalid @enderror" name="price">

            {{-- Error validation --}}
            @error('price')
                <div class="alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Series --}}
        <div class="series">
            <label for="series" id="series" name="series">Collezione</label>
            <input type="text" id="series" value="{{old('series')}}" class="@error('series') is-invalid @enderror" name="series" placeholder="Nome collezione">

            {{-- Error validation --}}
            @error('series')
                <div class="alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Sale date --}}
        <div class="sale_date">
            <label for="sale_date" id="sale_date" name="sale_date">Data di vendita</label>
            <input type="date" id="sale_date" value="{{old('sale_date')}}" class="@error('sale_date') is-invalid @enderror" name="sale_date">

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
                <option value="comic book" {{old('type') == 'comic book' ? 'selected' : ''}}>comic book</option>
                <option value="graphic novel" {{old('type') == 'graphic novel' ? 'selected' : ''}}>graphic novel</option>
            </select>

            {{-- Error validation --}}
            @error('type')
                <div class="alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Submit --}}
        <button type="submit">Aggiungi</button>

        {{-- If error validate form--}}
        @if ($errors->any())
            <div class="alert_message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
         @endif
    </form>

@endsection