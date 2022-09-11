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
                            <h4 style="align-content: center"></h4>{{ $course->id }}<span></span>
                        </div>
                    </div>
                    <div class="question bg-white p-3 border-bottom">
                        <div class="d-flex flex-row align-items-center question-title">
                            <h3 class="text-danger">Q.</h3>
                            <h5 class="mt-1 ml-2">{{ $course->title }}</h5>
                        </div>
                        <div class="text-center">

                            <img src="{{ asset('storage/' . $course->image) }}" alt="image" width="500" height="600" class="rounded">
                        </div>

                    </div>

                    <div class="col-6">
                        @if (isset($course->next))
                            <a href="{{ route('courses.show', $course->next->id) }}">
                                <div>Next</div>
                            </a>
                        @endif
                    </div>
                    {{-- {{ $course->links() }} --}}
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
