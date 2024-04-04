<?php

/** @var \Modules\Base\Classes\Fetch\Rights $this */

$this->add_right("paypal", "paypal", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("paypal", "paypal", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("paypal", "paypal", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("paypal", "paypal", "staff", view:true, add:true, edit:true);
$this->add_right("paypal", "paypal", "registered", view:true, add:true);
$this->add_right("paypal", "paypal", "guest", view:true, );

$this->add_right("paypal", "ipn", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("paypal", "ipn", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("paypal", "ipn", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("paypal", "ipn", "staff", view:true, add:true, edit:true);
$this->add_right("paypal", "ipn", "registered", view:true, add:true);
$this->add_right("paypal", "ipn", "guest", view:true, );

