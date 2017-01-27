<?php

namespace CC\OROCRM\ConnectBundle\Service;

/**
 * OroCRM customer integration facade interface
 * Send functions of this class will send email messages
 * created from oro-crm templates populated with external and internal data.
 * External data will be set by arguments with function call.
 * Internal data will be used from oro-crm database.
 */
interface EmailSenderInterface
{
    public function sendVerificationCode($email, $code);
    public function sendRegistrationSuccesssulEmail($email);
    public function sendSubscribeNewsletterConfirmationContact($email);
    public function sendSubscribeNewsletterConfirmationAccount($email);
    public function sendSubscribeCampaignWaitinglistConfirmationContact($email, $Waitinglistname);
    public function sendSubscribeCampaignWaitinglistConfirmationAccount($email, $Waitinglistname);
    public function sendBookAppointment($email, $datetimeAppointment, $Campaign);
    public function sendContactEmail($email, $Subject, $Message);
    public function sendOpenSupportCase($email, $Subject, $Message);
    public function sendSendReview($email, $Campaign, $Doctor);
}
