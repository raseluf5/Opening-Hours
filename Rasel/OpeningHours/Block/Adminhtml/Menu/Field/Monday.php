<?php 
namespace Rasel\OpeningHours\Block\Adminhtml\Menu\Field;

use Rasel\OpeningHours\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;

class Monday extends AbstractFieldArray
{
    protected $_typeblockOptions;
    protected $_cmsblockOptions;
    /**
     * {@inheritdoc}
     */
    protected function _prepareToRender()
    {
        $this->addColumn(
            'monday_open',
            [
                'label' => __('Opening time'),
                'size' => '300px',
                'class' => 'required-entry'
            ]
        );

        $this->addColumn(
            'monday_close',
            [
                'label' => __('Closing time'),
                'size' => '300px',
                'class' => 'required-entry'
            ]
        );


        $this->_addAfter = false;

    }
}