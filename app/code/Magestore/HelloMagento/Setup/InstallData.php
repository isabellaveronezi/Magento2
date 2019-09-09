<?php

namespace Magestore\HelloMagento\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $data =  [
                   'example_id' => '1',
                   'title' => 'test',
                   'content' => 'test in Magento 2',
                   'created_at' => '2019-09-01',
                   'lastname' => 'Veronezi'
        ];
        $setup->getConnection()
               ->insert(
                   'magestore_helloworld',
                   $data
                   );

        $setup->endSetup();
    }
}
