<?php


namespace Fulfillment\Postage\Models\Response\Base;


use Fulfillment\Postage\Models\Response\Contracts\TrackingNumber;

abstract class BaseTrackingNumber implements TrackingNumber
{
    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @param string $barcodeScanValue
     */
    public function setBarcodeScanValue($barcodeScanValue)
    {
        $this->barcodeScanValue = $barcodeScanValue;
    }

    /**
     * @param string $carrier
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
    }
    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getBarcodeScanValue()
    {
        return $this->barcodeScanValue;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
        return $this->carrier;
    }
    /**
     * @var string
     */
    protected $value;

    /**
     * @var string
     */
    protected $barcodeScanValue;

    /**
     * @var string
     */
    protected $carrier;
}