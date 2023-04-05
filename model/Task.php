<?php

class Task
{
  public $description;
  public $dateCreated;
  public $dateUpdated;
  public $dateDone;
  public $priority;
  public $isDone;
  public $user;

  public function __construct(string $description, $user)
  {
    $this->description = $description;
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
