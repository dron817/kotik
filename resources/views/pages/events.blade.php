@extends('layouts.general')

@section('title', 'Главная')
@section('custom-css')
@endsection
@section('custom-js-before')
@endsection
@section('custom-js-after')
@endsection
@section('content')
<div class="col">
    <div class="row pl-25 pb-25 mt-25">
        <h2><span>Ближайшие мероприятия</span></h2>
        @foreach($events as $event)
            <div class="col-12">
                <div class="newsBox newsBox-page">
                    <div class="thumbnail">
                        <div class="caption maxheight2">
                            <div class="box_inner">
                                <div class="box">
                                    <p class="title">
                                        <h4 class="fw-bold">{{ $event->title }}</h4>
                                    </p>
                                    <p>{{ $event->description }}</p>
                                    <p><i class="fa fa-calendar"></i> Приём заявок до: <span class="underline">{{ $event->date }}</span></p>
                                    <a class="btn join" href="{{ route('event') }}/{{ $event->id }}">Принять участие</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
