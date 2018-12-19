<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Customer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @param Customer $customer
     * @return array
     * @Route("/{id}", name="homepage")
     * @ParamConverter(name="customer", class="AppBundle\Entity\Customer")
     * @Template
     */
    public function indexAction(Customer $customer)
    {
        return [
            'customer' => $customer,
        ];
    }
}
