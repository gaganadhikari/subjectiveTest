<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $this->seedQuestions();
    }
    private function seedQuestions(){
        $questions = [
            [
                'subject' => 'Chemistry',
                'question_text' => 'What is the chemical symbol for water?',
                'options' => ['H2O', 'CO2', 'NaCl', 'O2'],
                'correct_answer' => 'H2O'
            ],
            [
                'subject' => 'Chemistry',
                'question_text' => 'What is the chemical symbol for oxygen?',
                'options' => ['H2O', 'O2', 'NaCl', 'CO2'],
                'correct_answer' => 'O2'
            ],
            [
                'subject' => 'Chemistry',
                'question_text' => 'What is the pH of pure water?',
                'options' => ['7', '1', '14', '0'],
                'correct_answer' => '7'
            ],
            [
                'subject' => 'Chemistry',
                'question_text' => 'What gas is produced when a metal reacts with an acid?',
                'options' => ['Oxygen', 'Hydrogen', 'Carbon dioxide', 'Nitrogen'],
                'correct_answer' => 'Hydrogen'
            ],
            [
                'subject' => 'Chemistry',
                'question_text' => 'What is the chemical formula for sodium chloride?',
                'options' => ['H2O', 'NaCl', 'CO2', 'O2'],
                'correct_answer' => 'NaCl'
            ],
            [
                'subject' => 'Chemistry',
                'question_text' => 'Which element is the most abundant in the Earth’s atmosphere?',
                'options' => ['Oxygen', 'Nitrogen', 'Carbon', 'Hydrogen'],
                'correct_answer' => 'Nitrogen'
            ],
            [
                'subject' => 'Chemistry',
                'question_text' => 'What is the chemical formula for methane?',
                'options' => ['H2O', 'CH4', 'NaCl', 'O2'],
                'correct_answer' => 'CH4'
            ],
            [
                'subject' => 'Chemistry',
                'question_text' => 'What is the atomic number of carbon?',
                'options' => ['6', '8', '14', '12'],
                'correct_answer' => '6'
            ],
            [
                'subject' => 'Chemistry',
                'question_text' => 'What is the chemical symbol for gold?',
                'options' => ['Hg', 'Ag', 'Au', 'Cu'],
                'correct_answer' => 'Au'
            ],
            [
                'subject' => 'Chemistry',
                'question_text' => 'Which gas is known as laughing gas?',
                'options' => ['Oxygen', 'Nitrogen', 'Carbon dioxide', 'Nitrous oxide'],
                'correct_answer' => 'Nitrous oxide'
            ],
            [
                'subject' => 'Chemistry',
                'question_text' => 'Which gas is responsible for the ozone layer?',
                'options' => ['Oxygen', 'Nitrogen', 'Carbon dioxide', 'Ozone'],
                'correct_answer' => 'Ozone'
            ],
            [
                'subject' => 'Chemistry',
                'question_text' => 'What is the chemical formula for sulfuric acid?',
                'options' => ['H2SO4', 'HCl', 'HNO3', 'NaOH'],
                'correct_answer' => 'H2SO4'
            ],
            [
                'subject' => 'Chemistry',
                'question_text' => 'What is the chemical symbol for iron?',
                'options' => ['Fe', 'Au', 'Ag', 'Cu'],
                'correct_answer' => 'Fe'
            ],
            [
                'subject' => 'Chemistry',
                'question_text' => 'What is the chemical formula for carbon dioxide?',
                'options' => ['CO2', 'CH4', 'H2O', 'O2'],
                'correct_answer' => 'CO2'
            ],
            [
                'subject' => 'Chemistry',
                'question_text' => 'Which of the following elements is a noble gas?',
                'options' => ['Helium', 'Oxygen', 'Hydrogen', 'Nitrogen'],
                'correct_answer' => 'Helium'
            ],
            [
                'subject' => 'Physics',
                'question_text' => 'What is the SI unit of force?',
                'options' => ['Newton', 'Joule', 'Watt', 'Volt'],
                'correct_answer' => 'Newton'
            ],
            [
                'subject' => 'Physics',
                'question_text' => 'What is the SI unit of energy?',
                'options' => ['Newton', 'Joule', 'Watt', 'Volt'],
                'correct_answer' => 'Joule'
            ],
            [
                'subject' => 'Physics',
                'question_text' => 'Which of the following is a vector quantity?',
                'options' => ['Mass', 'Speed', 'Distance', 'Force'],
                'correct_answer' => 'Force'
            ],
            [
                'subject' => 'Physics',
                'question_text' => 'Which law states that for every action, there is an equal and opposite reaction?',
                'options' => ['Newton\'s First Law', 'Newton\'s Second Law', 'Newton\'s Third Law', 'Law of Gravity'],
                'correct_answer' => 'Newton\'s Third Law'
            ],
            [
                'subject' => 'Physics',
                'question_text' => 'What is the acceleration due to gravity on Earth?',
                'options' => ['9.8 m/s²', '5.6 m/s²', '12.3 m/s²', '7.2 m/s²'],
                'correct_answer' => '9.8 m/s²'
            ],
            [
                'subject' => 'Physics',
                'question_text' => 'What is the SI unit of power?',
                'options' => ['Newton', 'Joule', 'Watt', 'Volt'],
                'correct_answer' => 'Watt'
            ],
            [
                'subject' => 'Physics',
                'question_text' => 'Which type of energy does an object possess due to its motion?',
                'options' => ['Potential Energy', 'Kinetic Energy', 'Mechanical Energy', 'Thermal Energy'],
                'correct_answer' => 'Kinetic Energy'
            ],
            [
                'subject' => 'Physics',
                'question_text' => 'What is the SI unit of electric charge?',
                'options' => ['Coulomb', 'Ampere', 'Ohm', 'Volt'],
                'correct_answer' => 'Coulomb'
            ],
            [
                'subject' => 'Physics',
                'question_text' => 'Which law states that the current passing through a conductor is directly proportional to the voltage across it?',
                'options' => ['Newton\'s First Law', 'Ohm\'s Law', 'Newton\'s Third Law', 'Faraday\'s Law'],
                'correct_answer' => 'Ohm\'s Law'
            ],
            [
                'subject' => 'Physics',
                'question_text' => 'Which law describes the force of attraction or repulsion between two charged objects?',
                'options' => ['Newton\'s Law of Gravitation', 'Ohm\'s Law', 'Coulomb\'s Law', 'Faraday\'s Law'],
                'correct_answer' => 'Coulomb\'s Law'
            ],
            [
                'subject' => 'Physics',
                'question_text' => 'What is the SI unit of electric potential difference?',
                'options' => ['Coulomb', 'Ampere', 'Ohm', 'Volt'],
                'correct_answer' => 'Volt'
            ],
            [
                'subject' => 'Physics',
                'question_text' => 'Which type of mirror always forms a virtual, erect, and diminished image?',
                'options' => ['Concave Mirror', 'Convex Mirror', 'Plane Mirror', 'Spherical Mirror'],
                'correct_answer' => 'Convex Mirror'
            ],
            [
                'subject' => 'Physics',
                'question_text' => 'What is the SI unit of frequency?',
                'options' => ['Hertz', 'Watt', 'Joule', 'Newton'],
                'correct_answer' => 'Hertz'
            ],
            [
                'subject' => 'Physics',
                'question_text' => 'Which law states that the angle of incidence is equal to the angle of reflection?',
                'options' => ['Newton\'s Law of Gravitation', 'Law of Reflection', 'Snell\'s Law', 'Faraday\'s Law'],
                'correct_answer' => 'Law of Reflection'
            ],
        ];
        foreach ($questions as $question_text) {
            $question = Question::create([
                'subject' => $question_text['subject'],
                'question' => $question_text['question_text'],
                'answer' => $question_text['correct_answer']
            ]);
            foreach ($question_text['options'] as $optionText) {
                $option = new Option([
                    'option' => $optionText,
                    'question_id' => $question->id
                ]);
                $question->options()->save($option);
            }
        }
    }
}
