@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form method="POST" action="{{ route('submit.answers') }}">
                    @csrf
                    <div class="card">
                        <div class="card-header">{{ $questionnaire->title }}</div>

                        <div class="card-body">
                            @foreach ($questionnaire->questionnairQuestions as $index => $questionnairQuestion)
                                <h5>{{ $index + 1 }}. {{ $questionnairQuestion->question->question }}</h5>
                                <ul>
                                    @foreach ($questionnairQuestion->question->options as $option)
                                        <li>
                                            <label>
                                                <input type="radio" name="answers[{{ $questionnairQuestion->question->id }}]" value="{{ $option->option }}">
                                                {{ $option->option }}
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            @endforeach
                        </div>
                    </div>
                    <input type="hidden" name="questionner_id" value="{{ $questionnaire->id }}">
                    <input type="hidden" name="student_id" value="{{ request()->query('student') }}">
                    <button type="submit" class="btn btn-primary mt-3">Submit Answers</button>
                </form>
            </div>
        </div>
    </div>
@endsection
