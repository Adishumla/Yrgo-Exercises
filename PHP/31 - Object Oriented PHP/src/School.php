<?php

class School
{
    public string $name;
    private array $programs = [];

    public function addProgram(Program $program): void
    {
        $this->programs[] = $program;
    }

    public function getPrograms(): array
    {
        return $this->programs;
    }
}
