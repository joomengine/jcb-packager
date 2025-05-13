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

namespace VDM\Joomla\Componentbuilder\Package\Service;


use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use VDM\Joomla\Componentbuilder\Package\Grep;
use VDM\Joomla\Componentbuilder\Package\Layout\Remote\Config;
use VDM\Joomla\Componentbuilder\Package\Dependency\Resolver;
use VDM\Joomla\Componentbuilder\Power\Remote\Get;
use VDM\Joomla\Componentbuilder\Package\Remote\Set;
use VDM\Joomla\Componentbuilder\Package\Layout\Readme\Item as ItemReadme;
use VDM\Joomla\Componentbuilder\Package\Layout\Readme\Main as MainReadme;


/**
 * Layout Service Provider
 * 
 * @since  5.2.1
 */
class Layout implements ServiceProviderInterface
{
	/**
	 * Registers the service provider with a DI container.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  void
	 * @since   5.2.1
	 */
	public function register(Container $container)
	{
		$container->alias(Grep::class, 'Layout.Grep')
			->share('Layout.Grep', [$this, 'getGrep'], true);

		$container->alias(Config::class, 'Layout.Remote.Config')
			->share('Layout.Remote.Config', [$this, 'getRemoteConfig'], true);

		$container->alias(Resolver::class, 'Layout.Resolver')
			->share('Layout.Resolver', [$this, 'getResolver'], true);

		$container->alias(Get::class, 'Layout.Remote.Get')
			->share('Layout.Remote.Get', [$this, 'getRemoteGet'], true);

		$container->alias(Set::class, 'Layout.Remote.Set')
			->share('Layout.Remote.Set', [$this, 'getRemoteSet'], true);

		$container->alias(ItemReadme::class, 'Layout.Readme.Item')
			->share('Layout.Readme.Item', [$this, 'getItemReadme'], true);

		$container->alias(MainReadme::class, 'Layout.Readme.Main')
			->share('Layout.Readme.Main', [$this, 'getMainReadme'], true);
	}

	/**
	 * Get The Grep Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Grep
	 * @since   5.2.1
	 */
	public function getGrep(Container $container): Grep
	{
		return new Grep(
			$container->get('Layout.Remote.Config'),
			$container->get('Gitea.Repository.Contents'),
			$container->get('Network.Resolve'),
			$container->get('Config')->approved_package_paths
		);
	}

	/**
	 * Get The Remote Config Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Config
	 * @since  5.2.1
	 */
	public function getRemoteConfig(Container $container): Config
	{
		return new Config(
			$container->get('Power.Table')
		);
	}

	/**
	 * Get The Resolver Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Resolver
	 * @since 5.2.1
	 */
	public function getResolver(Container $container): Resolver
	{
		return new Resolver(
			$container->get('Layout.Remote.Config'),
			$container->get('Power.Tracker'),
			$container->get('Power.Table')
		);
	}

	/**
	 * Get The Remote Get Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Get
	 * @since   5.2.1
	 */
	public function getRemoteGet(Container $container): Get
	{
		return new Get(
			$container->get('Layout.Remote.Config'),
			$container->get('Layout.Grep'),
			$container->get('Data.Item')
		);
	}

	/**
	 * Get The Remote Set Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Set
	 * @since   5.2.1
	 */
	public function getRemoteSet(Container $container): Set
	{
		return new Set(
			$container->get('Layout.Remote.Config'),
			$container->get('Layout.Grep'),
			$container->get('Data.Items'),
			$container->get('Layout.Readme.Item'),
			$container->get('Layout.Readme.Main'),
			$container->get('Gitea.Repository.Contents'),
			$container->get('Power.Message'),
			$container->get('Config')->approved_package_paths
		);
	}

	/**
	 * Get The Item Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  ItemReadme
	 * @since   5.2.1
	 */
	public function getItemReadme(Container $container): ItemReadme
	{
		return new ItemReadme();
	}

	/**
	 * Get The Main Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  MainReadme
	 * @since   5.2.1
	 */
	public function getMainReadme(Container $container): MainReadme
	{
		return new MainReadme();
	}
}

