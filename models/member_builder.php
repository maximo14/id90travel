<?php
require "member.php";

class MemberBuilder
{
    private $member;

    public function __construct()
    {
        $this->member = new Member();
    }

    public function setId($id)
    {
        $this->member->setId($id);
        return $this;
    }

    public function setApiId($api_id)
    {
        $this->member->setApiId($api_id);
        return $this;
    }

    public function setAirline($airline)
    {
        $this->member->setAirline($airline);
        return $this;
    }

    public function setUsername($username)
    {
        $this->member->setUsername($username);
        return $this;
    }

    public function setFirstName($first_name)
    {
        $this->member->setFirstName($first_name);
        return $this;
    }

    public function setlastName($last_name)
    {
        $this->member->setlastName($last_name);
        return $this;
    }

    public function setEmail($email)
    {
        $this->member->setEmail($email);
        return $this;
    }

    public function setDateOfHire($date_of_hire)
    {
        $this->member->setDateOfHire($date_of_hire);
        return $this;
    }

    public function setEmployeeNumber($employee_number)
    {
        $this->member->setEmployeeNumber($employee_number);
        return $this;
    }

    public function setStatus($status)
    {
        $this->member->setStatus($status);
        return $this;
    }

    public function setStation($station)
    {
        $this->member->setStation($station);
        return $this;
    }

    public function setPasswordDigest($password_digest)
    {
        $this->member->setStatus($password_digest);
        return $this;
    }

    public function setMemberType($member_type)
    {
        $this->member->setMemberType($member_type);
        return $this;
    }

    public function setToken($token)
    {
        $this->member->setToken($token);
        return $this;
    }

    public function setState($state)
    {
        $this->member->setState($state);
        return $this;
    }

    public function setStateChangedAt($state_changed_at)
    {
        $this->member->setStateChangedAt($state_changed_at);
        return $this;
    }

    public function setAcceptTermsOfService($accept_terms_of_service)
    {
        $this->member->setAcceptTermsOfService($accept_terms_of_service);
        return $this;
    }

    public function setLang($lang)
    {
        $this->member->setLang($lang);
        return $this;
    }

    public function setIdentityId($identity_id)
    {
        $this->member->setIdentityId($identity_id);
        return $this;
    }

    public function setId90UserId($id90_user_id)
    {
        $this->member->setId90UserId($id90_user_id);
        return $this;
    }

    public function setOrganizationId($organization_id)
    {
        $this->member->setOrganizationId($organization_id);
        return $this;
    }

    public function setCurrency($currency)
    {
        $this->member->setCurrency($currency);
        return $this;
    }

    public function setTutorialShown($tutorial_shown)
    {
        $this->member->setTutorialShown($tutorial_shown);
        return $this;
    }

    public function setUtmSource($utm_source)
    {
        $this->member->setUtmSource($utm_source);
        return $this;
    }

    public function setUtmMedium($utm_medium)
    {
        $this->member->setUtmMedium($utm_medium);
        return $this;
    }

    public function setConfirmationToken($confirmation_token)
    {
        $this->member->setConfirmationToken($confirmation_token);
        return $this;
    }

    public function setConfirmedAt($confirmed_at)
    {
        $this->member->setConfirmedAt($confirmed_at);
        return $this;
    }

    public function setConfirmationSentAt($confirmation_sent_at)
    {
        $this->member->setConfirmationSentAt($confirmation_sent_at);
        return $this;
    }

    public function setCreatedAt($created_at)
    {
        $this->member->setCreatedAt($created_at);
        return $this;
    }

    public function setVerificationEmail($verification_email)
    {
        $this->member->setVerificationEmail($verification_email);
        return $this;
    }

    public function setAffiliation($affiliation)
    {
        $this->member->setAffiliation($affiliation);
        return $this;
    }

    public function setReviewSent($review_sent)
    {
        $this->member->setReviewSent($review_sent);
        return $this;
    }

    public function setAppDownloaded($app_downloaded)
    {
        $this->member->setAppDownloaded($app_downloaded);
        return $this;
    }

    public function setDeleteRequested($delete_requested)
    {
        $this->member->setDeleteRequested($delete_requested);
        return $this;
    }

    public function setEmailOptOut($email_opt_out)
    {
        $this->member->setEmailOptOut($email_opt_out);
        return $this;
    }

    public function setProfileImageUrl($profile_image_url)
    {
        $this->member->setProfileImageUrl($profile_image_url);
        return $this;
    }

    public function build(){
        return $this->member;
    }
}
