@extends ('layouts.app')

@section('title', 'NOS CONTACTS')

@section('title-page', 'Création Form Contacts')

@section('content')

<form action="{{ route('contacts.store')}}" method="post">

    @csrf

    <div>
    <label for="firstname"></label>
    <input type="text" name="firstname" placeholder="Prénom">
    </div>
<br>
    <div>
    <label for="lastname"></label>
    <input type="text" name="lastname" placeholder="Nom">
    </div>
<br>
    <div>
    <label for="phone"></label>
    <input type="text" name="phone" placeholder="Phone">
    </div>
<br>
    <div>
    <label for="email"></label>
    <input type="email" name="email" placeholder="Email">
    </div>
<br>
    <input type="submit" value="Valider">

@if ($errors->any())
    @foreach ($errors->all() as $error)
    <p> {{ $error }} </p>
    @endforeach
    @endif

</form>



@endsection