<?php
/**
 * User: casperlai
 * Date: 2016/8/31
 * Time: 上午1:08
 */

namespace Casperlaitw\LaravelFbMessenger\Messages;

/**
 * Class ReceiveMessage
 * @package Casperlaitw\LaravelFbMessenger\Messages
 */
class ReceiveMessage
{

    /**
     * @var string
     */
    private $sender;

    /**
     * @var string
     */
    private $message;

    /**
     * @var bool
     */
    private $skip = false;

    /**
     * @var bool
     */
    private $payload = false;

    /**
     * @var bool
     */
    private $referral = false;

    /**
     * @var string
     */
    private $postback;

    /**
     * @var string
     */
    private $recipient;

    /**
     * @var array
     */
    private $attachments = [];

    /**
     * Receive constructor.
     *
     * @param string $recipient
     * @param string $sender
     *
     */
    public function __construct($recipient, $sender)
    {
        $this->recipient = $recipient;
        $this->sender = $sender;
    }

    /**
     * Set skip
     *
     * @param $skip
     *
     * @return $this
     */
    public function setSkip($skip)
    {
        $this->skip = $skip;
        return $this;
    }

    /**
     * Is skip the message
     *
     * @return bool
     */
    public function isSkip()
    {
        return $this->skip;
    }

    /**
     * Get sender
     *
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set postback
     *
     * @param $postback
     *
     * @return $this
     */
    public function setPostback($postback)
    {
        $this->postback = $postback;
        return $this;
    }

    /**
     * Get postback payload
     *
     * @return string
     */
    public function getPostback()
    {
        return $this->postback;
    }

    /**
     * Get referral payload
     *
     * @return string
     */
    public function getReferral()
    {
        return $this->referral;
    }

    /**
     * Set payload
     *
     * @param $payload
     *
     * @return $this
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;
        return $this;
    }

    /**
     * Set referral
     *
     * @param $payload
     *
     * @return $this
     */
    public function setReferral($referral)
    {
        $this->referral = $referral;
        return $this;
    }

    /**
     * Is playload message
     *
     * @return boolean
     */
    public function isPayload()
    {
        return $this->payload;
    }

    /**
     * Is referral message
     *
     * @return boolean
     */
    public function isReferral()
    {
        return $this->referral;
    }

    /**
     * Get recipient id
     *
     * @return string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Set attachments
     *
     * @param $attachments
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;
        return $this;
    }

    /**
     * Get attachments
     *
     * @return array
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Has attachments
     *
     * @return bool
     */
    public function hasAttachments()
    {
        return count($this->attachments) > 0;
    }
}
