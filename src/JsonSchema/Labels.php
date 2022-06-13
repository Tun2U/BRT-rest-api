<?php

namespace Tun2U\Brt\JsonSchema;

class Labels
{

    /**
     * Array di Label
     *
     * @var Label
     */
    private $labels;

    public function __construct($labelsArray = array())
    {
        foreach($labelsArray as $item) {
            if (!empty($item)) {
                $label = new Label();
                $label->setDataLength($item->dataLength);
                $label->setParcelID($item->parcelId);
                $label->setStream($item->stream);
                $this->labels[] = $label;
            }
        }
    }


    /**
     * @return Label
     */
    public function getLabels(): Label
    {
        return $this->labels;
    }

    /**
     * @param Label $labels
     */
    public function setLabels(Label $labels): void
    {
        $this->labels = $labels;
    }


}