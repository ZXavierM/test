<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.order.command_handler.change_order_invoice_address_handler' shared service.

return $this->services['prestashop.adapter.order.command_handler.change_order_invoice_address_handler'] = new \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\ChangeOrderInvoiceAddressHandler(${($_ = isset($this->services['prestashop.adapter.order.amount.updater']) ? $this->services['prestashop.adapter.order.amount.updater'] : $this->load('getPrestashop_Adapter_Order_Amount_UpdaterService.php')) && false ?: '_'});
