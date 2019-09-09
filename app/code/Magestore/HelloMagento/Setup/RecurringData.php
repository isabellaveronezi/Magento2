<?php

namespace Magestore\HelloMagento\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class RecurringData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $bind = ['example_id' => rand('1000', '9000')];
        $setup->getConnection()
            ->update('magestore_helloworld', $bind, 'lastname = "Veronezi"');

        $setup->endSetup();
    }
}
