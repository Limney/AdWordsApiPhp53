<?php

namespace AdWords\cm\v201109;



class AuthenticationErrorReason
{
    const CHOICE_AUTHENTICATION_FAILED = 'AUTHENTICATION_FAILED';
    const CHOICE_CLIENT_CUSTOMER_ID_IS_REQUIRED = 'CLIENT_CUSTOMER_ID_IS_REQUIRED';
    const CHOICE_CLIENT_EMAIL_REQUIRED = 'CLIENT_EMAIL_REQUIRED';
    const CHOICE_CLIENT_CUSTOMER_ID_INVALID = 'CLIENT_CUSTOMER_ID_INVALID';
    const CHOICE_CLIENT_EMAIL_INVALID = 'CLIENT_EMAIL_INVALID';
    const CHOICE_CLIENT_EMAIL_FAILED_TO_AUTHENTICATE = 'CLIENT_EMAIL_FAILED_TO_AUTHENTICATE';
    const CHOICE_CUSTOMER_NOT_FOUND = 'CUSTOMER_NOT_FOUND';
    const CHOICE_GOOGLE_ACCOUNT_DELETED = 'GOOGLE_ACCOUNT_DELETED';
    const CHOICE_GOOGLE_ACCOUNT_COOKIE_INVALID = 'GOOGLE_ACCOUNT_COOKIE_INVALID';
    const CHOICE_FAILED_TO_AUTHENTICATE_GOOGLE_ACCOUNT = 'FAILED_TO_AUTHENTICATE_GOOGLE_ACCOUNT';
    const CHOICE_GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH = 'GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH';
    const CHOICE_LOGIN_COOKIE_REQUIRED = 'LOGIN_COOKIE_REQUIRED';
    const CHOICE_NOT_ADS_USER = 'NOT_ADS_USER';
    const CHOICE_OAUTH_TOKEN_INVALID = 'OAUTH_TOKEN_INVALID';
    const CHOICE_OAUTH_TOKEN_EXPIRED = 'OAUTH_TOKEN_EXPIRED';
    const CHOICE_OAUTH_TOKEN_DISABLED = 'OAUTH_TOKEN_DISABLED';
    const CHOICE_OAUTH_TOKEN_REVOKED = 'OAUTH_TOKEN_REVOKED';
    const CHOICE_OAUTH_TOKEN_HEADER_INVALID = 'OAUTH_TOKEN_HEADER_INVALID';
    const CHOICE_LOGIN_COOKIE_INVALID = 'LOGIN_COOKIE_INVALID';
    const CHOICE_FAILED_TO_RETRIEVE_LOGIN_COOKIE = 'FAILED_TO_RETRIEVE_LOGIN_COOKIE';
    const CHOICE_USER_ID_INVALID = 'USER_ID_INVALID';

    private $_validValues = array(
        'AUTHENTICATION_FAILED',
        'CLIENT_CUSTOMER_ID_IS_REQUIRED',
        'CLIENT_EMAIL_REQUIRED',
        'CLIENT_CUSTOMER_ID_INVALID',
        'CLIENT_EMAIL_INVALID',
        'CLIENT_EMAIL_FAILED_TO_AUTHENTICATE',
        'CUSTOMER_NOT_FOUND',
        'GOOGLE_ACCOUNT_DELETED',
        'GOOGLE_ACCOUNT_COOKIE_INVALID',
        'FAILED_TO_AUTHENTICATE_GOOGLE_ACCOUNT',
        'GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH',
        'LOGIN_COOKIE_REQUIRED',
        'NOT_ADS_USER',
        'OAUTH_TOKEN_INVALID',
        'OAUTH_TOKEN_EXPIRED',
        'OAUTH_TOKEN_DISABLED',
        'OAUTH_TOKEN_REVOKED',
        'OAUTH_TOKEN_HEADER_INVALID',
        'LOGIN_COOKIE_INVALID',
        'FAILED_TO_RETRIEVE_LOGIN_COOKIE',
        'USER_ID_INVALID',
    );

    private $_value;

    public function __construct($value)
    {
        if (!in_array($value, $this->_validValues))
            throw new \InvalidArgumentException(
                sprintf('Invalid enum value %s', $value)
            );

        $this->_value = $value;
    }

    public function __toString()
    {
        return $this->_value;
    }
}