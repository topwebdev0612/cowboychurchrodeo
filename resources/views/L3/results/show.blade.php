@extends('layouts.producer')

@section('content')
<div class="mt-n4 mx-n4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="{{ route('L3.results.home', [$organization->id]) }}"> Rodeos </a> </li>
            <li class="breadcrumb-item"> <a href="{{ route('L3.results.index', [$organization->id, $rodeo->id]) }}"> Events </a> </li>
            <li class="breadcrumb-item active" aria-current="page"> {{ $competition->group->name }} &ndash; {{ $competition->event->name }} </li>
        </ol>
    </nav>
</div>
<div class="container-fluid">

    <x-session-alerts />

    <h1> Record results </h1>
    <hr class="mb-2">

    <div class="card mb-5">
        <div class="card-body">
            {{ $rodeo->name ? $rodeo->name : "Rodeo #{$rodeo->id}" }} <br>
            <x-rodeo-dates :model="$rodeo" />
        </div>
    </div>

    <h2> {{ $competition->group->name }} &ndash; {{ $competition->event->name }} </h2>
    <hr>
    <table class="table table-responsive-cards bg-white border">
        <thead>
            <tr>
                <th> Entry </th>
                <th> Contestant </th>
                <th> Score </th>
            </tr>
        </thead>
        <tbody>
            @foreach( $entries as $entry )
                <tr>
                    <td> 
                        <span class="d-md-none"> Entry: </span>
                        #{{ $entry->id }} 
                    </td>
                    <td> 
                        {{ $entry->contestant->lexical_name_order }} 
                    </td>
                    <td> 
                        <span class="d-md-none"> Score: </span> 
                        @if( null !== $entry->score )
                            {{ $entry->score }} 
                        @else
                            <small class="text-muted"> <i>No score reported</i> </small>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="my-2">
        <a href="{{ route('L3.results.edit', [$organization->id, $rodeo->id, $competition->id]) }}" class="btn btn-primary"> Enter scores </a>
        <a href="{{ route('L3.results.index', [$organization->id, $rodeo->id]) }}" class="btn btn-outline-secondary"> Cancel </a>
    </div>


</div>
@endsection