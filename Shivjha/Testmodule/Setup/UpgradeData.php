<?php




namespace Shivjha\Testmodule\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;


/**
 * Class InstallData
 */
class UpgradeData implements UpgradeDataInterface
{

    /**
     * EAV setup factory
     *
     * @var EavSetupFactory
     */


    /**
     * InstallData constructor.
     *
     * @param EavSetupFactory $eavSetupFactory
     */


    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Zend_Validate_Exception
     */
    public function Upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        /** @var EavSetup $eavSetup */
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.0.1', '<'))
        {
            $setup->getConnection()->update($setup->getTable('shiv_jha_testmodule'), ['Description' => 'Default description'],$setup->getConnection()->quoteInto('id = ?', 1));
        }



        $setup->endSetup();

    }
}
