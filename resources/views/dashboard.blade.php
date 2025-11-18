@extends('layouts.app')

@section('content')


    @if (session('name'))
        <h2>Welcome, {{ session('name') }}</h2>
    @endif


    @if (count($contacts) > 0)
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact['name'] }}</td>
                        <td>{{ $contact['email'] }}</td>
                        <td>{{ $contact['phone'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No Contacts Found</p>
    @endif

@endsection
