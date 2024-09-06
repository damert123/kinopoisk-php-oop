<?php

namespace App\Models;

use App\Kernel\Auth\User;

class Review
{

    public function __construct(
        private int $id,
        private string $rating,
        private string $review,
        private string $createdAt,
        private User $user,
    )
    {

    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function rating(): string
    {
        return $this->rating;
    }

    /**
     * @return string
     */
    public function review(): string
    {
        return $this->review;
    }

    /**
     * @return string
     */
    public function createdAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @return User
     */
    public function user(): User
    {
        return $this->user;
    }

}