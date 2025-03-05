<?php

declare(strict_types=1);

class AdminMainController {
    private $adminId;
    private $adminUUID; 

    public function __construct(string $adminId, string $adminUUID)
    {
        $this->adminId = $adminId; 
        $this->adminUUID = $adminUUID;
    }
    

}