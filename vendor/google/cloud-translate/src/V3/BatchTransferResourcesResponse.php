<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/automl_translation.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for BatchTransferResources.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.BatchTransferResourcesResponse</code>
 */
class BatchTransferResourcesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Responses of the transfer for individual resources.
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3.BatchTransferResourcesResponse.TransferResourceResponse responses = 1;</code>
     */
    private $responses;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Translate\V3\BatchTransferResourcesResponse\TransferResourceResponse>|\Google\Protobuf\Internal\RepeatedField $responses
     *           Responses of the transfer for individual resources.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\AutomlTranslation::initOnce();
        parent::__construct($data);
    }

    /**
     * Responses of the transfer for individual resources.
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3.BatchTransferResourcesResponse.TransferResourceResponse responses = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResponses()
    {
        return $this->responses;
    }

    /**
     * Responses of the transfer for individual resources.
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3.BatchTransferResourcesResponse.TransferResourceResponse responses = 1;</code>
     * @param array<\Google\Cloud\Translate\V3\BatchTransferResourcesResponse\TransferResourceResponse>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResponses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Translate\V3\BatchTransferResourcesResponse\TransferResourceResponse::class);
        $this->responses = $arr;

        return $this;
    }

}
