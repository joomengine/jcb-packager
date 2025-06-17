<?php
/**
 * @package    Joomla.Component.Builder
 *
 * @created    4th September, 2022
 * @author     Llewellyn van der Merwe <https://dev.vdm.io>
 * @git        Joomla Component Builder <https://git.vdm.dev/joomla/Component-Builder>
 * @copyright  Copyright (C) 2015 Vast Development Method. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace VDM\Joomla\Componentbuilder\Package\Readme;


/**
 * Main Readme
 * 
 * @since  5.1.1
 */
abstract class Main
{
	/**
	 * Get the Index
	 *
	 * @param array    $classes  The powers.
	 *
	 * @return string
	 * @since  5.1.1
	 */
	protected function getIndex(array &$items): string
	{
		$classes = [];
		foreach ($items as $guid => $power)
		{
			// add to the sort bucket
			$classes[] = [
				'name' => $power['name'] ?? 'error',
				'line' => $this->indexLineBuilder($power)
			];
		}

		return $this->indexBuilder($classes);
	}

	/**
	 * Generate the index string for classes
	 *
	 * @param array $classes The sorted classes
	 *
	 * @return string The index string
	 * @since  3.2.0
	 */
	protected function generateIndex(array &$classes): string
	{
		foreach ($classes as $class)
		{
			// Add the class details
			$result .= "\n - " . $class['line'];
		}

		return $result;
	}

	/**
	 * Sort and model the readme classes
	 *
	 * @param array $classes The powers.
	 *
	 * @return string
	 * @since  3.2.0
	 */
	private function indexBuilder(array &$classes): string
	{
		$this->sortClasses($classes);

		return $this->generateIndex($classes);
	}

	/**
	 * Sort the flattened array using a single sorting function
	 *
	 * @param array $classes The classes to sort
	 *
	 * @since 3.2.0
	 */
	private function sortClasses(array &$classes): void
	{
		usort($classes, function ($a, $b) {
			return $this->compareName($a, $b);
		});
	}

	/**
	 * Compare the name of two classes
	 *
	 * @param array $a First class
	 * @param array $b Second class
	 *
	 * @return int Comparison result
	 * @since 3.2.0
	 */
	private function compareName(array $a, array $b): int
	{
		return strcmp($a['name'], $b['name']);
	}

	/**
	 * Build the Link to the power in this repository
	 *
	 * @param array  $power  The power details.
	 *
	 * @return string
	 * @since 3.2.0
	 */
	private function indexLineBuilder(array &$power): string
	{
		$name = $power['name'] ?? 'error';
		return '**' . $name . '**'
			. $this->linkPowerRepo($power)
			. $this->linkPowerSettings($power)
			. $this->linkPowerDesc($power);
	}

	/**
	 * Build the Link to the power in this repository
	 *
	 * @param array  $power  The power details.
	 *
	 * @return string
	 * @since  3.2.0
	 */
	private function linkPowerRepo(array &$power): string
	{
		$path = $power['path'] ?? null;
		return $path
			? ' | [Details](' . $path . ')'
			: '';
	}

	/**
	 * Build the Link to the power settings in this repository
	 *
	 * @param array  $power  The power details.
	 *
	 * @return string
	 * @since  3.2.0
	 */
	private function linkPowerSettings(array &$power): string
	{
		$settings = $power['settings'] ?? null;
		return $settings
			? ' | [Settings](' . $settings . ')'
			: '';
	}

	/**
	 * Get the short description
	 *
	 * @param array  $power  The power details.
	 *
	 * @return string
	 * @since  3.2.0
	 */
	private function linkPowerDesc(array &$power): string
	{
		$desc = $power['desc'] ?? $power['description'] ?? null;
		return $desc
			? ' | ' . $desc
			: '';
	}
}

