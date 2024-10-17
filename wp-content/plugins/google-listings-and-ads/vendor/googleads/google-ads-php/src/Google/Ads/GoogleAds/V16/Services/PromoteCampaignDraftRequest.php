<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/campaign_draft_service.proto

namespace Google\Ads\GoogleAds\V16\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CampaignDraftService.PromoteCampaignDraft][google.ads.googleads.v16.services.CampaignDraftService.PromoteCampaignDraft].
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.services.PromoteCampaignDraftRequest</code>
 */
class PromoteCampaignDraftRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the campaign draft to promote.
     *
     * Generated from protobuf field <code>string campaign_draft = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $campaign_draft = '';
    /**
     * If true, the request is validated but no Long Running Operation is created.
     * Only errors are returned.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     */
    protected $validate_only = false;

    /**
     * @param string $campaignDraft Required. The resource name of the campaign draft to promote.
     *
     * @return \Google\Ads\GoogleAds\V16\Services\PromoteCampaignDraftRequest
     *
     * @experimental
     */
    public static function build(string $campaignDraft): self
    {
        return (new self())
            ->setCampaignDraft($campaignDraft);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $campaign_draft
     *           Required. The resource name of the campaign draft to promote.
     *     @type bool $validate_only
     *           If true, the request is validated but no Long Running Operation is created.
     *           Only errors are returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Services\CampaignDraftService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the campaign draft to promote.
     *
     * Generated from protobuf field <code>string campaign_draft = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCampaignDraft()
    {
        return $this->campaign_draft;
    }

    /**
     * Required. The resource name of the campaign draft to promote.
     *
     * Generated from protobuf field <code>string campaign_draft = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCampaignDraft($var)
    {
        GPBUtil::checkString($var, True);
        $this->campaign_draft = $var;

        return $this;
    }

    /**
     * If true, the request is validated but no Long Running Operation is created.
     * Only errors are returned.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If true, the request is validated but no Long Running Operation is created.
     * Only errors are returned.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

