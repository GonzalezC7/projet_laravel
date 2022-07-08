@extends ('layouts.app')

@section('title', 'NOS CONTACTS')

@section('title-page', 'Liste Contacts')

@section('content')


@foreach ($infos as $info)

<table>

    <tr>
    <td>{{$info->firstname}}</td>
    <td>{{$info->lastname}}</td>
    <td>{{$info->phone}}</td>
    <td>{{$info->email}}</td>
    <td>
        <a href="{{route('contacts.show', [$info->id])}}">Détail</a>
        <a href="{{route('contacts.edit', [$info->id])}}">Editer</a>
        <form action="{{route('contacts.destroy', [$info->id])}}" method="post">
            @csrf
            @method("DELETE")
            <input type="submit" value="Supprimer" />
        </form>
    </td>
    </tr>

</table>

@endforeach

@endsection