<?php
/**
 * User: casperlai
 * Date: 2016/9/1
 * Time: 下午3:29
 */

namespace Casperlaitw\LaravelFbMessenger\Contracts;

/**
 * Class PostbackHandler
 * @package Casperlaitw\LaravelFbMessenger\Contracts
 */
abstract class ReferralHandler extends BaseHandler
{
    /**
     * @var string
     */
    protected $referral;

    /**
     * Get referral
     *
     * @return mixed
     */
    public function getReferral()
    {
        return $this->referral;
    }
}
