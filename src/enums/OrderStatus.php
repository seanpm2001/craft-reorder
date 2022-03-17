<?php
namespace spicyweb\reorder\enums;

/**
 * Class OrderStatus
 *
 * @package spicyweb\reorder\enums
 * @author Spicy Web <craft@spicyweb.com.au>
 * @since 1.0.0
 */
abstract class OrderStatus
{
	public const DoesNotExist = 'The order does not exist';
	public const Partial = 'Some items are not available';
	public const NoItemsAvailable = 'No items available';
}
