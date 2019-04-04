<?php
require '../../vendor/autoload.php';
require '../../models/member_builder.php';
use GuzzleHttp\Client;

class AuthenticationService
{
    public function __construct()
    { }

    public function authenticate($airline, $username, $password)
    {
        $client = new Client();       
        $response = $client->post('https://beta.id90travel.com/session.json', [
            'query' => [
                'session[airline]' => $airline,
                'session[username]' => $username,
                'session[password]' => $password
            ]
        ]);
        if ($response->getStatusCode() == '200')
            {
                $body = $response->getBody();
                $decode = json_decode($body)->member;
                $memberBuilder = new MemberBuilder();
                $member = $memberBuilder->setId($decode->id)
                              ->setApiId($decode->api_id)
                              ->setAirline($decode->airline)
                              ->setUsername($decode->username)
                              ->setFirstName($decode->first_name)
                              ->setlastName($decode->last_name)
                              ->setEmail($decode->email)
                              ->setDateOfHire($decode->date_of_hire)
                              ->setEmployeeNumber($decode->employee_number)
                              ->setStatus($decode->status)
                              ->setStation($decode->station)
                              ->setPasswordDigest($decode->password_digest)
                              ->setMemberType($decode->member_type)
                              ->setToken($decode->token)
                              ->setState($decode->state)
                              ->setStateChangedAt($decode->state_changed_at)
                              ->setAcceptTermsOfService($decode->accept_terms_of_service)
                              ->setLang($decode->lang)
                              ->setIdentityId($decode->identity_id)
                              ->setId90UserId($decode->id90_user_id)
                              ->setOrganizationId($decode->organization_id)
                              ->setCurrency($decode->currency)
                              ->setTutorialShown($decode->tutorial_shown)
                              ->setUtmSource($decode->utm_source)
                              ->setUtmMedium($decode->utm_medium)
                              ->setConfirmationToken($decode->confirmation_token)
                              ->setConfirmedAt($decode->confirmed_at)
                              ->setConfirmationSentAt($decode->confirmation_sent_at)
                              ->setCreatedAt($decode->created_at)
                              ->setVerificationEmail($decode->verification_email)
                              ->setAffiliation($decode->affiliation)
                              ->setReviewSent($decode->review_sent)
                              ->setAppDownloaded($decode->app_downloaded)
                              ->setDeleteRequested($decode->delete_requested)
                              ->setEmailOptOut($decode->email_opt_out)
                              ->setProfileImageUrl($decode->profile_image_url)                              
                              ->build();
                return $member;
            }
    }
}
