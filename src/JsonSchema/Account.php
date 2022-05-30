<?php

class Account
{

    /**
     * @var string
     */
    private $userID;

    /**
     * @var string
     */
    private $password;



    /**
     * @param string $userID
     * @param string $password
     */
    public function __construct(string $userID, string $password)
    {
        $this->userID = $userID;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getUserID(): string
    {
        return $this->userID;
    }

    /**
     * @param string $userID
     */
    public function setUserID(string $userID): void
    {
        $this->userID = $userID;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }


    /**
     * @return string
     */
    public function toJsonPayload() : string
    {
        $payload['userID'] = $this->userID;
        $payload['password'] = $this->password;
        return json_encode($payload);
    }


}