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
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="ans"
                                    checked="true" />
                                <label class="form-check-label" for="flexCheckDefault">{{ $question->reponse1 }}</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="ans" />
                                <label class="form-check-label" for="flexCheckDefault">{{ $question->reponse2 }}</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="ans" />
                                <label class="form-check-label" for="flexCheckDefault">{{ $question->reponse3 }}</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="ans" />
                                <label class="form-check-label" for="flexCheckDefault">{{ $question->reponse4 }}</label>
                            </div>
                            <input value="{{ $question->ans }}" style="visibility: hidden" name="dbans">
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white">
                            <button class="btn btn-primary border-success align-items-center btn-success" type="submit"
                                href="{{ route('quiz.show', $question->next->id) }}">Next<i
                                    class="fa fa-angle-right ml-2"></i></button>
                        </div>

                        <div class="col-6">
                            @if (isset($question->next))
                                <a href="{{ route('quiz.show', $question->next->id) }}">
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
