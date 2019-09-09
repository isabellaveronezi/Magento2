<?php

namespace Magestore\HelloMagento\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{

    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if (version_compare($context->getVersion(), '2.0.2', '<')) {
            $table = $setup->getTable('magestore_helloworld');
            $setup->getConnection()
                ->insertForce(
                    $table,
                    [
                        'title' => 'Magento',
                        'content' => 'This is test ok',
                        'created_at' => '2019-09-02',
                        'lastname' => 'Rocha'
                    ]
                );
        }
        $setup->endSetup();
    }
}
