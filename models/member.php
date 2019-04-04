<?php
class Member
{
    private $id;
    private $api_id;
    private $airline;
    private $username;
    private $first_name;
    private $last_name;
    private $email;
    private $date_of_hire;
    private $employee_number;
    private $status;
    private $station;
    private $password_digest;
    private $member_type;
    private $token;
    private $state;
    private $state_changed_at;
    private $accept_terms_of_service;
    private $lang;
    private $identity_id;
    private $id90_user_id;
    private $organization_id;
    private $currency;
    private $tutorial_shown;
    private $utm_source;
    private $utm_medium;
    private $confirmation_token;
    private $confirmed_at;
    private $confirmation_sent_at;
    private $created_at;
    private $verification_email;
    private $affiliation;
    private $review_sent;
    private $app_downloaded;
    private $delete_requested;
    private $email_opt_out;
    private $profile_image_url;

    public function __construct()
    { }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getApiId()
    {
        return $this->api_id;
    }

    public function setApiId($api_id)
    {
        $this->api_id = $api_id;
    }

    public function getAirline()
    {
        return $this->airline;
    }

    public function setAirline($airline)
    {
        $this->airline = $airline;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getDateOfHire()
    {
        return $this->date_of_hire;
    }

    public function setDateOfHire($date_of_hire)
    {
        $this->date_of_hire = $date_of_hire;
    }

    public function getEmployeeNumber()
    {
        return $this->employee_number;
    }

    public function setEmployeeNumber($employee_number)
    {
        $this->employee_number = $employee_number;

        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStation()
    {
        return $this->station;
    }

    public function setStation($station)
    {
        $this->station = $station;
    }

    public function getPasswordDigest()
    {
        return $this->password_digest;
    }

    public function setPasswordDigest($password_digest)
    {
        $this->password_digest = $password_digest;
    }

    public function getMemberType()
    {
        return $this->member_type;
    }

    public function setMemberType($member_type)
    {
        $this->member_type = $member_type;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getStateChangedAt()
    {
        return $this->state_changed_at;
    }

    public function setStateChangedAt($state_changed_at)
    {
        $this->state_changed_at = $state_changed_at;
    }

    public function getAcceptTermsOfService()
    {
        return $this->accept_terms_of_service;
    }

    public function setAcceptTermsOfService($accept_terms_of_service)
    {
        $this->accept_terms_of_service = $accept_terms_of_service;
    }

    public function getLang()
    {
        return $this->lang;
    }

    public function setLang($lang)
    {
        $this->lang = $lang;
    }

    public function getIdentityId()
    {
        return $this->identity_id;
    }

    public function setIdentityId($identity_id)
    {
        $this->identity_id = $identity_id;
    }

    public function getId90UserId()
    {
        return $this->id90_user_id;
    }

    public function setId90UserId($id90_user_id)
    {
        $this->id90_user_id = $id90_user_id;
    }

    public function getOrganizationId()
    {
        return $this->organization_id;
    }

    public function setOrganizationId($organization_id)
    {
        $this->organization_id = $organization_id;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function getTutorialShown()
    {
        return $this->tutorial_shown;
    }

    public function setTutorialShown($tutorial_shown)
    {
        $this->tutorial_shown = $tutorial_shown;
    }

    public function getUtmSource()
    {
        return $this->utm_source;
    }

    public function setUtmSource($utm_source)
    {
        $this->utm_source = $utm_source;
    }

    public function getUtmMedium()
    {
        return $this->utm_medium;
    }

    public function setUtmMedium($utm_medium)
    {
        $this->utm_medium = $utm_medium;
    }

    public function getConfirmationToken()
    {
        return $this->confirmation_token;
    }

    public function setConfirmationToken($confirmation_token)
    {
        $this->confirmation_token = $confirmation_token;
    }

    public function getConfirmedAt()
    {
        return $this->confirmed_at;
    }

    public function setConfirmedAt($confirmed_at)
    {
        $this->confirmed_at = $confirmed_at;
    }

    public function getConfirmationSentAt()
    {
        return $this->confirmation_sent_at;
    }

    public function setConfirmationSentAt($confirmation_sent_at)
    {
        $this->confirmation_sent_at = $confirmation_sent_at;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getVerificationEmail()
    {
        return $this->verification_email;
    }

    public function setVerificationEmail($verification_email)
    {
        $this->verification_email = $verification_email; 
    }

    public function getAffiliation()
    {
        return $this->affiliation;
    }

    public function setAffiliation($affiliation)
    {
        $this->affiliation = $affiliation;   
    }

    public function getReviewSent()
    {
        return $this->review_sent;
    }

    public function setReviewSent($review_sent)
    {
        $this->review_sent = $review_sent; 
    }

    public function getAppDownloaded()
    {
        return $this->app_downloaded;
    }

    public function setAppDownloaded($app_downloaded)
    {
        $this->app_downloaded = $app_downloaded;
    }

    public function getDeleteRequested()
    {
        return $this->delete_requested;
    }
   
    public function setDeleteRequested($delete_requested)
    {
        $this->delete_requested = $delete_requested;
    }

    public function getEmailOptOut()
    {
        return $this->email_opt_out;
    }

    public function setEmailOptOut($email_opt_out)
    {
        $this->email_opt_out = $email_opt_out;
    }

    public function getProfileImageUrl()
    {
        return $this->profile_image_url;
    }

    public function setProfileImageUrl($profile_image_url)
    {
        $this->profile_image_url = $profile_image_url;
    }
}
