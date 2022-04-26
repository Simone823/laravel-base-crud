@extends('layouts.default')
@section('headeTilte', 'Comics')

@section('mainContent')

    {{-- Table comics --}}
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

            @foreach ($comics as $element)
                <tr>
                    <td>
                        {{$element['id']}}
                    </td>

                    <td>
                        {{$element['title']}}
                    </td>

                    <td>
                        {{$element['description']}}
                    </td>

                    <td>
                        <img src="{{$element['thumb']}}" alt="">
                    </td>

                    <td>
                        {{$element['price']}}
                    </td>

                    <td>
                        {{$element['series']}}
                    </td>

                    <td>
                        {{$element['sale_date']}}
                    </td>

                    <td>
                        {{$element['type']}}
                    </td>

                    <td>
                        <a href="{{route('comics.show', $element['id'])}}">Visualizza</a>
                    </td>
                </tr>
            @endforeach

    </table>

@endsection