<?php 
namespace Rasel\OpeningHours\Block\Adminhtml\Menu\Field;

use Rasel\OpeningHours\Block\System\Config\Form\Field\FieldArray\AbstractFieldArrayThursday;

class Thursday extends AbstractFieldArrayThursday
{
    protected $_typeblockOptions;
    protected $_cmsblockOptions;
    /**
     * {@inheritdoc}
     */
    protected function _prepareToRender()
    {
        $this->addColumn(
            'thursday_open',
            [
                'label' => __('Opening time'),
                'size' => '300px'
            ]
        );

        $this->addColumn(
            'thursday_close',
            [
                'label' => __('Closing time'),
                'size' => '300px'
            ]
        );


        $this->_addAfter = false;

    }
}