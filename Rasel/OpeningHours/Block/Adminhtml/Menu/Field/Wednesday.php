<?php 
namespace Rasel\OpeningHours\Block\Adminhtml\Menu\Field;

use Rasel\OpeningHours\Block\System\Config\Form\Field\FieldArray\AbstractFieldArrayWednesday;

class Wednesday extends AbstractFieldArrayWednesday
{
    protected $_typeblockOptions;
    protected $_cmsblockOptions;
    /**
     * {@inheritdoc}
     */
    protected function _prepareToRender()
    {
        $this->addColumn(
            'wednesday_open',
            [
                'label' => __('Opening time'),
                'size' => '300px'
            ]
        );

        $this->addColumn(
            'wednesday_close',
            [
                'label' => __('Closing time'),
                'size' => '300px'
            ]
        );


        $this->_addAfter = false;

    }
}