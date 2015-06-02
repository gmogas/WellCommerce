<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\ProducerBundle\DataFixtures\ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Persistence\ObjectManager;
use WellCommerce\Bundle\CoreBundle\DataFixtures\AbstractDataFixture;
use WellCommerce\Bundle\ProducerBundle\Entity\Producer;
use WellCommerce\Bundle\RoutingBundle\Helper\Sluggable;

/**
 * Class LoadProducerData
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class LoadProducerData extends AbstractDataFixture
{
    const SAMPLES = ['LG', 'Samsung', 'Sony', 'Panasonic', 'Toshiba'];

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $shop       = $this->getReference('shop');

        foreach (self::SAMPLES as $name) {
            $producer = new Producer();
            $producer->addShop($shop);
            $producer->translate('en')->setName($name);
            $producer->translate('en')->setSlug(Sluggable::makeSlug($name));
            $producer->mergeNewTranslations();
            $manager->persist($producer);
            $this->setReference('producer_'.$name, $producer);
        }

        $manager->flush();
    }
    
    /**
     * Sample demo data
     *
     * @return array
     */
    protected function getSampleProducers()
    {
        return [
            'LG',
            'Samsung',
            'Sony',
            'Panasonic',
            'Toshiba',
        ];
        
    }
}