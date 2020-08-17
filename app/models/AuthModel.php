<?php

class AuthModel
{
    private $user_id;

    public function setAuthId($id)
    {
        $this->user_id = $id;
    }

    public function getAuthId()
    {
        return $this->user_id;
    }
    
    public function toArray()
    {
        return [
            'user_id'            => $this->getUserId(),
        ];
    }
}

?>