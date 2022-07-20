<?php




namespace Shivjha\Testmodule\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;


/**
 * Class InstallData
 */
class UpgradeSchema implements UpgradeSchemaInterface
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
    public function Upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        /** @var EavSetup $eavSetup */
       $setup->startSetup();
        if (version_compare($context->getVersion(), '1.0.1', '<'))
        {
            $setup->getConnection()->addColumn($setup->getTable('shiv_jha_testmodule'),'Description', ['type' => Table::TYPE_TEXT, 'nullable' => true, 'comment' => 'Item Description']);


        }
       $setup->endSetup();

    }
}
