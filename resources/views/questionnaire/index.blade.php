@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Questionnaires</div>

                    <div class="card-body">
                        <div class="mb-3">
                            <a href="#" class="btn btn-primary" onclick="document.getElementById('questionnair-form').style.display = 'block';">Add Questionnaire</a>
                        </div>

                        @if ($questionnaires->count() > 0)
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Expiry Date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($questionnaires as $questionnaire)
                                    <tr>
                                        <td>{{ $questionnaire->title }}</td>
                                        <td>{{ $questionnaire->expiry_date }}</td>
                                        <td>
                                           <a href="/questioner/{{ $questionnaire->id }}" class="btn btn-primary">View</a>
                                            <a href="/send-exam/{{ $questionnaire->id }}" class="btn btn-primary">Send to students</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>No questionnaires found.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3" id="questionnair-form" style="display: none">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Add Questionnaire</div>

                    <div class="card-body">
                        <form method="POST" id="add_questioneer">
                            @csrf

                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>

                            <div class="mb-3">
                                <label for="expiry_date" class="form-label">Expiry Date</label>
                                <input type="date" class="form-control" id="expiry_date" name="expiry_date" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Generate</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
    $("#add_modifiers").submit(function(event) {
        event.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: '/questioner',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                // location.reload(true);
            },
            error: function(response) {
                let strigify = JSON.stringify(response)
                const pres = JSON.parse(strigify);
                const rePars = JSON.parse(pres.responseText);
                let title = rePars.errors?.title?.toString() ? rePars.errors.name.toString() : '';
                $('#nameError').text(title);
            },
            complete: function() {
                // $('#loaderIcon').hide();
            }
        });
    })
</script>
@endsection
