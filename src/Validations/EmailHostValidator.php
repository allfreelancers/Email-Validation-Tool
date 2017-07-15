<?php

namespace EmailValidation\Validations;

class EmailHostValidator extends Validator
{
    public function getValidatorName(): string
    {
        return 'valid_host'; // @codeCoverageIgnore
    }

    /**
     * @return bool
     */
    public function getResultResponse(): bool
    {
        $hostName = $this->getEmailAddress()->getHostPart();
        return ($this->getHostByName($hostName) !== $hostName);
    }

    /**
     * @param string $hostName
     * @return string
     */
    protected function getHostByName(string $hostName): string
    {
        return gethostbyname($hostName); // @codeCoverageIgnore
    }
}