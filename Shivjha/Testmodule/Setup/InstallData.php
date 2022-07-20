<?php




namespace Shivjha\Testmodule\Setup;


use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Class InstallData
 */
class InstallData implements InstallDataInterface
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
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        /** @var EavSetup $eavSetup */
        $setup->startSetup();
        $setup->getConnection()->insert($setup->getTable('shiv_jha_testmodule'), ['Name' => 'TEST 1']);
        $setup->getConnection()->insert($setup->getTable('shiv_jha_testmodule'), ['Name' => 'TEST 2']);
        $setup->endSetup();

    }
}
