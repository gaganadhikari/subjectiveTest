<?php
use App\Http\Controllers\QuestionnaireController;
use App\Models\Questionnaire;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Pest;

Pest::test('index returns active questionnaires', function () {
// Create some expired and active questionnaires
Questionnaire::factory()->count(5)->create(['expiry_date' => now()->subDay()]);
Questionnaire::factory()->count(3)->create(['expiry_date' => now()->addDay()]);

$response = $this->get('/questionnaires');

$response->assertOk();
$this->assertCount(3, $response->json('questionnaires'));
});

Pest::test('store creates questionnaire with valid data', function () {
    $request = [
        'title' => 'Test Questionnaire',
        'expiry_date' => now()->addWeek(),
    ];

    $response = $this->post('/questionnaires', $request);

    $response->assertRedirect('/questionnaires'); // Assuming redirect on success
    $this->assertDatabaseHas('questionnaires', ['title' => 'Test Questionnaire']);
});

