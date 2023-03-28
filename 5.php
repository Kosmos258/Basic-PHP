<?php

//1 задание

class Task
{
  public $description;
  public $dateCreated;
  public $dateUpdated;
  public $dateDone;
  public $priority;
  public $isDone;
  public $user;

  public function __construct($description, $priority, $user)
  {
    $this->description = $description;
    $this->priority = $priority;
    $this->user = $user;
    $this->dateCreated = new DateTime();
    $this->dateUpdated = new DateTime();
    $this->isDone = false;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
    $this->dateUpdated = new DateTime();
  }

  public function getDateCreated()
  {
    return $this->dateCreated;
  }

  public function getDateUpdated()
  {
    return $this->dateUpdated;
  }

  public function getDateDone()
  {
    return $this->dateDone;
  }

  public function getPriority()
  {
    return $this->priority;
  }

  public function setPriority($priority)
  {
    $this->priority = $priority;
    $this->dateUpdated = new DateTime();
  }

  public function isDone()
  {
    return $this->isDone;
  }

  public function markAsDone()
  {
    $this->isDone = true;
    $this->dateDone = new DateTime();
    $this->dateUpdated = new DateTime();
  }

  public function getUser()
  {
    return $this->user;
  }
}

$task = new Task("Купить продукты", 1, 'Kirill');

echo "Описание задачи: " . $task->getDescription() . "<br>";
echo "Дата создания задачи: " . $task->getDateCreated()->format('Y-m-d H:i:s') . "<br>";

$task->setDescription("Купить продукты и молоко");
$task->setPriority(2);
$task->markAsDone();

echo "Описание задачи: " . $task->getDescription() . "<br>";
echo "Приоритет задачи: " . $task->getPriority() . "<br>";
echo "Дата выполнения задачи: " . $task->getDateDone()->format('Y-m-d H:i:s') . "<br>";
echo "Дата последнего обновления задачи: " . $task->getDateUpdated()->format('Y-m-d H:i:s') . "<br>";

// 2 задание

class Comment
{
  private User $author;
  private Task $task;
  private string $text;

  public function __construct(User $author, Task1 $task, string $text)
  {
    $this->author = $author;
    $this->task = $task;
    $this->text = $text;
  }

  public function getAuthor(): User
  {
    return $this->author;
  }

  public function getTask(): Task
  {
    return $this->task;
  }

  public function getText(): string
  {
    return $this->text;
  }
}

class TaskService
{
  public static function addComment(User $author, Task1 $task, string $text)
  {
    $comment = new Comment($author, $task, $text);
    $task->addComment($comment);
  }
}

class User
{
  private string $name;
  private string $email;

  public function __construct(string $name, string $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getEmail(): string
  {
    return $this->email;
  }
}

class Task1
{
  private string $description;
  private int $dateCreated;
  private int $dateUpdated;
  private int $dateDone;
  private int $priority;
  private bool $isDone;
  private User $user;
  private array $comments = [];

  public function __construct(string $description, int $priority, User $user)
  {
    $this->description = $description;
    $this->priority = $priority;
    $this->user = $user;
    $this->dateCreated = time();
    $this->dateUpdated = time();
    $this->isDone = false;
  }

  public function getDescription(): string
  {
    return $this->description;
  }

  public function setDescription(string $description)
  {
    $this->description = $description;
    $this->dateUpdated = time();
  }

  public function getDateCreated(): int
  {
    return $this->dateCreated;
  }

  public function getDateUpdated(): int
  {
    return $this->dateUpdated;
  }

  public function getDateDone(): int
  {
    return $this->dateDone;
  }

  public function getPriority(): int
  {
    return $this->priority;
  }

  public function setPriority(int $priority)
  {
    $this->priority = $priority;
    $this->dateUpdated = time();
  }

  public function isDone(): bool
  {
    return $this->isDone;
  }

  public function markAsDone()
  {
    $this->isDone = true;
    $this->dateDone = time();
    $this->dateUpdated = time();
  }

  public function getUser(): User
  {
    return $this->user;
  }

  public function addComment(Comment $comment)
  {
    $this->comments[] = $comment;
  }

  public function getComments(): array
  {
    return $this->comments;
  }
}
