@extends('layouts.default')

@section('mainContent')

    {{-- Table comic --}}
    <table>

        {{-- Table header --}}
        <tr>
            <th>id</th>
            <th>title</th>
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

@endsection