<?php

namespace App\DTO;

class CreateReportDTO
{

    private int $user_id;
    private string $sysName;
    private  string $sysUrl;
    private string $note;
    private  int $depart;
    private int $from_depart;

    /**
     * @param int $user_id
     * @param string $sysName
     * @param string $sysUrl
     * @param string $note
     * @param int $depart
     * @param int $from_depart
     */
    public function __construct(int $user_id, string $sysName, string $sysUrl, string $note, int $depart, int $from_depart)
    {
        $this->user_id = $user_id;
        $this->sysName = $sysName;
        $this->sysUrl = $sysUrl;
        $this->note = $note;
        $this->depart = $depart;
        $this->from_depart = $from_depart;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    public function getSysName(): string
    {
        return $this->sysName;
    }

    public function setSysName(string $sysName): void
    {
        $this->sysName = $sysName;
    }

    public function getSysUrl(): string
    {
        return $this->sysUrl;
    }

    public function setSysUrl(string $sysUrl): void
    {
        $this->sysUrl = $sysUrl;
    }

    public function getNote(): string
    {
        return $this->note;
    }

    public function setNote(string $note): void
    {
        $this->note = $note;
    }

    public function getDepart(): int
    {
        return $this->depart;
    }

    public function setDepart(int $depart): void
    {
        $this->depart = $depart;
    }

    public function getFromDepart(): int
    {
        return $this->from_depart;
    }

    public function setFromDepart(int $from_depart): void
    {
        $this->from_depart = $from_depart;
    }




}
