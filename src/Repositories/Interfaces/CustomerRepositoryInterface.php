<?php

namespace Ignacio\MercadoPago\Repositories\Interfaces;

use Ignacio\MercadoPago\Models\ClientCustomer;

interface CustomerRepositoryInterface{
     function create(ClientCustomer $customer) : Array;
     function addCard(String $customer_id, ClientCard $clientCard) : Array;
}