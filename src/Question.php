<?php

namespace App;

class Question
{
    protected string $answer;
    protected string $correct;

    public function __construct(protected $body, protected $solution)
    {
    }

    public function answer($answer): bool
    {
        $this->answer = $answer;

        return $this->correct = $answer === $this->solution;
    }

    public function solved(): string
    {
        return $this->correct;
    }
}