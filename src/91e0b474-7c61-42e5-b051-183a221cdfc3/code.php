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

namespace VDM\Joomla\Componentbuilder\Snippet\Remote;


use Joomla\CMS\Language\Text;
use VDM\Joomla\Interfaces\Remote\SetInterface;
use VDM\Joomla\Abstraction\Remote\Set as ExtendingSet;


/**
 * Set Snippet based on global unique ids to remote repository
 * 
 * @since 5.1.1
 */
final class Set extends ExtendingSet implements SetInterface
{
	/**
	 * update an existing item (if changed)
	 *
	 * @param object $item
	 * @param object $existing
	 * @param object $repo
	 *
	 * @return bool
	 * @since  5.0.3
	 */
	protected function updateItem(object $item, object $existing, object $repo): bool
	{
		$sha = $existing->params->source[$repo->guid . '-settings'] ?? null;
		$existing = $this->mapItem($existing);
		$area = $this->getArea();
		$item_name = $this->index_map_IndexName($item);
		$repo_name = $this->getRepoName($repo);

		if ($sha === null || $this->areObjectsEqual($item, $existing))
		{
			$this->messages->add('warning', Text::sprintf('COM_COMPONENTBUILDER_S_ITEM_S_DETAILS_IN_REPOS_DID_NOT_CHANGE_SO_NO_UPDATE_WAS_MADE', $area, $item_name, $repo_name));
			return false;
		}

		$result = $this->git->update(
			$repo->organisation, // The owner name.
			$repo->repository, // The repository name.
			$this->index_map_IndexSettingsPath($item), // The file path.
			json_encode($item, JSON_PRETTY_PRINT), // The file content.
			'Update ' . $item->name, // The commit message.
			$sha, // The blob SHA of the old file.
			$repo->write_branch // The branch name.
		);

		$success = is_object($result);

		if (!$success)
		{
			$this->messages->add('warning', Text::sprintf('COM_COMPONENTBUILDER_S_ITEM_S_DETAILS_IN_REPOS_FAILED_TO_UPDATE', $area, $item_name, $repo_name));
		}

		return $success;
	}

	/**
	 * create a new item
	 *
	 * @param object  $item
	 * @param object  $repo
	 *
	 * @return void
	 * @since  5.0.3
	 */
	protected function createItem(object $item, object $repo): void
	{
		$result = $this->git->create(
			$repo->organisation, // The owner name.
			$repo->repository, // The repository name.
			$this->index_map_IndexSettingsPath($item), // The file path.
			json_encode($item, JSON_PRETTY_PRINT), // The file content.
			'Create ' . $item->name, // The commit message.
			$repo->write_branch // The branch name.
		);

		return is_object($result);
	}

	/**
	 * update an existing item readme
	 *
	 * @param object $item
	 * @param object $existing
	 * @param object $repo
	 *
	 * @return void
	 * @since  5.0.3
	 */
	protected function updateItemReadme(object $item, object $existing, object $repo): void
	{
		// make sure there was a change
		$sha = $existing->params->source[$repo->guid . '-readme'] ?? null;
		if ($sha === null)
		{
			return;
		}

		$this->git->update(
			$repo->organisation, // The owner name.
			$repo->repository, // The repository name.
			$this->index_map_IndexPath($item) . '/README.md', // The file path.
			$this->itemReadme->get($item), // The file content.
			'Update ' . $item->name . ' readme file', // The commit message.
			$sha, // The blob SHA of the old file.
			$repo->write_branch // The branch name.
		);
	}

	/**
	 * create a new item readme
	 *
	 * @param object  $item
	 * @param object  $repo
	 *
	 * @return void
	 * @since  5.0.3
	 */
	protected function createItemReadme(object $item, object $repo): void
	{
		$this->git->create(
			$repo->organisation, // The owner name.
			$repo->repository, // The repository name.
			$this->index_map_IndexPath($item) . '/README.md', // The file path.
			$this->itemReadme->get($item), // The file content.
			'Create ' . $item->name . ' readme file', // The commit message.
			$repo->write_branch // The branch name.
		);
	}

	/**
	 * Get the item name for the index values
	 *
	 * @param object $item
	 *
	 * @return string|null
	 * @since  5.0.3
	 */
	protected function index_map_IndexName(object $item): ?string
	{
		return $item->name ?? null;
	}
}

