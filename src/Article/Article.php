<?php

declare(strict_types=1);

namespace LaravelDay\Article;

final class Article
{
    /** @var string */
    private $title;
    /** @var string */
    private $body;
    /** @var \DateTime */
    private $creationDate;

    /**
     * Article constructor.
     *
     * @param string    $title
     * @param string    $body
     * @param \DateTime $creationDate
     */
    public function __construct(string $title, string $body, \DateTimeImmutable $creationDate)
    {
        $this->title = $title;
        $this->body = $body;
        $this->creationDate = $creationDate;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate(): \DateTimeImmutable
    {
        return $this->creationDate;
    }
}
