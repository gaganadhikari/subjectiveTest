@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
{{--            @dd('hehe')--}}
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">{{ $questionnaire->title }}</div>

                    <div class="card-body">
                        @foreach ($questionnaire->questionnairQuestions as $questionnairQuestion)
                            <h5>{{ $questionnairQuestion->question->question }}</h5>
                            <ul>
                                @foreach ($questionnairQuestion->question->options as $option)
                                    <li>{{ $option->option }}</li>
                                @endforeach
                            </ul>
                            <p>Correct Answer: {{ $questionnairQuestion->question->answer }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
