<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0  Academic Free License (AFL 3.0)
 */

namespace PrestaShop\Module\PrestashopCheckout\FundingSource;

class FundingSourceCollectionBuilder
{
    /**
     * @var FundingSourceConfiguration
     */
    private $configuration;

    /**
     * @var FundingSourceEligibilityConstraint
     */
    private $eligibilityConstraint;

    /**
     * @param FundingSourceConfiguration $configuration
     * @param FundingSourceEligibilityConstraint $eligibilityConstraint
     */
    public function __construct(FundingSourceConfiguration $configuration, FundingSourceEligibilityConstraint $eligibilityConstraint)
    {
        $this->configuration = $configuration;
        $this->eligibilityConstraint = $eligibilityConstraint;
    }

    /**
     * Create the funding sources collection
     *
     * @return FundingSourceEntity[]
     */
    public function create()
    {
        // PayPal
        $paypal = new FundingSourceEntity('paypal');
        $paypal->setPosition($this->configuration->getPosition('paypal', 1));
        $paypal->setIsToggleable(false);

        // Credit card
        $card = new FundingSourceEntity('card');
        $card->setPosition($this->configuration->getPosition('card', 2));
        $card->setIsEnabled($this->configuration->isEnabled('card'));

        // Bancontact
        $bancontact = new FundingSourceEntity('bancontact');
        $bancontact->setPosition($this->configuration->getPosition('bancontact', 3));
        $bancontact->setIsEnabled($this->configuration->isEnabled('bancontact'));
        $bancontact->setCountries($this->eligibilityConstraint->getCountries('bancontact'));

        // eps
        $eps = new FundingSourceEntity('eps');
        $eps->setPosition($this->configuration->getPosition('eps', 4));
        $eps->setIsEnabled($this->configuration->isEnabled('eps'));
        $eps->setCountries($this->eligibilityConstraint->getCountries('eps'));

        // giropay
        $giropay = new FundingSourceEntity('giropay');
        $giropay->setPosition($this->configuration->getPosition('giropay', 5));
        $giropay->setIsEnabled($this->configuration->isEnabled('giropay'));
        $giropay->setCountries($this->eligibilityConstraint->getCountries('giropay'));

        // iDEAL
        $ideal = new FundingSourceEntity('ideal');
        $ideal->setPosition($this->configuration->getPosition('ideal', 6));
        $ideal->setIsEnabled($this->configuration->isEnabled('ideal'));
        $ideal->setCountries($this->eligibilityConstraint->getCountries('ideal'));

        // MyBank
        $mybank = new FundingSourceEntity('mybank');
        $mybank->setPosition($this->configuration->getPosition('mybank', 7));
        $mybank->setIsEnabled($this->configuration->isEnabled('mybank'));
        $mybank->setCountries($this->eligibilityConstraint->getCountries('mybank'));

        // P24
        $p24 = new FundingSourceEntity('p24');
        $p24->setPosition($this->configuration->getPosition('p24', 8));
        $p24->setIsEnabled($this->configuration->isEnabled('p24'));
        $p24->setCountries($this->eligibilityConstraint->getCountries('p24'));

        // Sofort
        $sofort = new FundingSourceEntity('sofort');
        $sofort->setPosition($this->configuration->getPosition('sofort', 9));
        $sofort->setIsEnabled($this->configuration->isEnabled('sofort'));
        $sofort->setCountries($this->eligibilityConstraint->getCountries('sofort'));

        return [$paypal, $card, $bancontact, $eps, $giropay, $ideal, $mybank, $p24, $sofort];
    }
}
