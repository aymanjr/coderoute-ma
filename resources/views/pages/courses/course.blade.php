@extends('layout')
@section('content')

<div class="container mt-5">
    <form method="POST" action="/submitans">
        @csrf
        <div class="d-flex justify-content-center row">

            <div class="col-md-10 col-lg-10">
                <div class="border">
                    {{-- @foreach ($questions as $question) --}}
                    <div class="question bg-white p-3 border-bottom">
                        <div class="d-flex flex-row justify-content-between align-items-center mcq">
                            <h4 style="align-content: center"></h4>{{ $question->id }}<span></span>
                        </div>
                    </div>
                    <div class="question bg-white p-3 border-bottom">
                        <div class="d-flex flex-row align-items-center question-title">
                            <h3 class="text-danger">Q.</h3>
                            <h5 class="mt-1 ml-2">{{ $question->title }}</h5>
                        </div>
                        <div class="text-center">

                            <img src="{{ asset('storage/' . $question->image) }}" alt="image" class="rounded">
                        </div>

                    </div>

                    <div class="col-6">
                        @if (isset($question->next))
                            <a href="{{ route('quiz.show', $question->next->id) }}">F
                                <div>Next</div>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
