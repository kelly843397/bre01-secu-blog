<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class Users
{
    private ? int $id = null;
    
    public function __construct(
        private string $username,
        private string $email,
        private string $password,
        private string $role,
        private string $created_at)
    {
        
    }
    
    private function getId(): ?int
    {
        return $this->id;
    }
    
    private function setId(?int $id): void
    {
        $this->id = $id;
    }
    
    private function getUsername(): string
    {
        return $this->username;
    }
    
    private function setUsername(string $username): void
    {
        $this->username = $username;
    }
    
    private function getEmail(): string 
    {
        return $this->email;
    }
    
    private function setEmail(string $email): void 
    {
        $this->email = $email;
    }
    
    private function getPassword(): string
    {
        return $this->password;
    }
    
    private function setPassword(string $password) : void
    {
        $this->password = $password;
    }
    
    private function getRole(): string
    {
        return $this->role;
    }
    
    private function setRole(string $role): void
    {
        $this->role = $role;
    }
    
    private function getCreated_at(): string
    {
        return $this->created_at;
    }
    
    private function setCreated_at(string $created_at): void
    {
        $this->created_at = $created_at;
    }
}