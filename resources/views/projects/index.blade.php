@extends('layouts.app')

@section('content')
    <h1>Projects</h1>

    <table>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->name }}</td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
@endsection()
