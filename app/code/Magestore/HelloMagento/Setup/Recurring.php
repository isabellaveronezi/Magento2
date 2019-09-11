<?php

namespace Magestore\HelloMagento\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

//class Recurring implements InstallSchemaInterface
//{

    /**
     * Installs DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
   /* public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $bind = ['example_id' => rand('1000', '9000')];
        $setup->getConnection()->update('magestore_helloworld', $bind);
        $setup->endSetup();
    }
}
*/