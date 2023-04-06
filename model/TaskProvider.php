<?php

class TaskProvider
{
    private array $tasks;

    public function __construct()
    {
        $this->tasks = $_SESSION['tasks'] ?? [];
    }


    /**
     * Метод возвращающий массив не выполненных задач из объекта
     * @return array
     */
    public function getUndoneList(): array
    {
        /**
         * @var Task $task
         */
        $tasks = [];
        foreach ($this->tasks as $key => $task) {
            if (!$task->isDone()) {
                $tasks[$key] = $task;
            }
        }


        return $tasks;
    }

    public function addTask(Task $task): void
    {
        $_SESSION['tasks'][] = $task;
        $this->tasks[] = $task;
    }

    public function deleteTask(int $key): void
    {
        unset($_SESSION['tasks'][$key]);
        unset($this->tasks[$key]);
    }
}
