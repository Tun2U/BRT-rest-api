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
            if (!empty($item) && is_array($item) && !empty($item[0])) {
                $label = new Label();
                $label->setDataLength($item[0]->dataLength);
                $label->setParcelID($item[0]->parcelID);
                $label->setStream($item[0]->stream);
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