<?php

namespace Tests;

use App\Question;
use App\Quiz;
use PHPUnit\Framework\TestCase;

class QuizTest extends TestCase
{
    /** @test */
    public function it_consists_of_questions(): void
    {
        $quiz = new Quiz();

        $quiz->addQuestion(new Question("what is 2 + 2: ", 4));

        $this->assertCount(1, $quiz->questions());
    }

    /** @test */
    public function it_crades_a_perfect_quiz(): void
    {
        $quiz = new Quiz();

        $quiz->addQuestion(new Question("what is 2 + 2: ", 4));

        $question = $quiz->nextQuestion();

        $question->answer(4);

        $this->assertEquals(100, $quiz->grade());
    }

    /** @test */
    public function it_crades_a_failad_quiz(): void
    {
        $quiz = new Quiz();

        $quiz->addQuestion(new Question("what is 2 + 2: ", 4));

        $question = $quiz->nextQuestion();

        $question->answer('incorrect answer');

        $this->assertEquals(0, $quiz->grade());
    }

    /** @test */
    public function it_cannot_be_granded_untill_all_questions_have_been_answered(): void
    {

    }

    /** @test */
    public function it_correctly_tracks_thenext_question_in_the_queue(): void
    {

    }
}