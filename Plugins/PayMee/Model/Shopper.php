<?php

namespace PayMee\Model;

/**
 * Class Shopper
 *
 * @package PayMee\Model
 */
class Shopper
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $fullName;

    /**
     * @var string
     */
    public $firstName;

    /**
     * @var string
     */
    public $lastName;

    /**
     * @var string
     */
    public $cpf;

    /**
     * @var string
     */
    public $agency;

    /**
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $ip;

    /**
     * Get the value of id
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param string $id
     * @return Shopper
     */
    public function withId(string $id) : Shopper
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the value of cpf
     *
     * @param string $cpf
     * @return $this
     */
    public function withCpf(string $cpf) : Shopper
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * Get the value of cpf
     *
     * @return string
     */
    public function getCpf() : string
    {
        return $this->cpf;
    }

    /**
     * Get the value of agency
     *
     * @return string
     */
    public function getBranch() : string
    {
        return $this->agency;
    }

    /**
     * Set the value of agency
     *
     * @param string $agency
     * @return Shopper
     */
    public function withBranch(string $branch) : Shopper
    {
        $this->agency = $branch;
        return $this;
    }

    /**
     * Get the value of account
     *
     * @return string
     */
    public function getAccount() : string
    {
        return $this->account;
    }

    /**
     * Set the value of account
     *
     * @param string $account
     * @return Shopper
     */
    public function withAccount(string $account) : Shopper
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param $email
     * @return Shopper
     */
    public function withEmail(string $email) : Shopper
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get the value of mobile
     * @return string
     */
    public function getPhone() : string
    {
        return $this->mobile;
    }

    /**
     * Set the value of mobile
     *
     * @param $mobile
     * @return Shopper
     */
    public function withPhone(string $phone) : Shopper
    {
        $this->mobile = $phone;
        return $this;
    }

    /**
     * Get the value of ip
     *
     * @return string
     */
    public function getIp() : string
    {
        return $this->ip;
    }

    /**
     * Set the value of ip
     *
     * @param string $ip
     * @return Shopper
     */
    public function withIp(string $ip) : Shopper
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * Get the value of fullName
     *
     * @return string
     */
    public function getFullName() : string
    {
        return $this->fullName;
    }

    /**
     * Set the value of fullName
     *
     * @param string $fullName
     * @return Shopper
     */
    public function withFullName(string $fullName) : Shopper
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * Get the value of firstName
     *
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @param string $firstName
     * @return Shopper
     */
    public function withFirstName(string $firstName) : Shopper
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Get the value of lastName
     *
     * @return string
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return Shopper
     */
    public function withLastName(string $lastName) : Shopper
    {
        $this->lastName = $lastName;
        return $this;
    }
} 
