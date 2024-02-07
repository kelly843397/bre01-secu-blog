<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

class Comment
{
    private ? int $id = null;
    
    public function __construct(private string $comments, private ?int $user_id, private ?int $post_id)
    {
       
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    
    public function getComments(): string
    {
        return $this->comments;
    }
    
    public function setComments(string $comments): void
    {
        $this->comments = $comments;
    }
    
    public function getUser_id(): ?int
    {
        return $this->user_id;
    }
    
    public function setUser_id(string $user_id): void
    {
        $this->user_id = user_id;
    }
    
    public function getPost_id(): ?int
    {
        return $this->post_id;
    }
    
    public function setPost_id(string $post_id): void
    {
        $this->post_id = post_id;
    }
    
}