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

namespace VDM\Joomla\Componentbuilder\Package\Library\Readme;


use VDM\Joomla\Interfaces\Readme\MainInterface;
use VDM\Joomla\Componentbuilder\Package\Readme\Main as ExtendingMain;


/**
 * Library Main Readme
 * 
 * @since  5.1.1
 */
final class Main extends ExtendingMain implements MainInterface
{
	/**
	 * Generate the main README for the JCB Libraries repository in Markdown format.
	 *
	 * JCB Libraries represent frontend utility packages (JavaScript, CSS) used inside
	 * Joomla Component Builder projects. These libraries support layouts, templates,
	 * site views, and admin views by embedding required assets automatically.
	 *
	 * @param  array  $items  All libraries currently stored in the repository.
	 *
	 * @return string  The full generated Markdown README.
	 * @since  5.1.1
	 */
	public function get(array $items): string
	{
		$readme = [];

		// Header
		$readme[] = '# JCB! Libraries';
		$readme[] = '';

		// What are JCB Libraries?
		$readme[] = '### What Are JCB Libraries?';
		$readme[] = <<<MD
JCB Libraries are **JavaScript and CSS frontend resources** (such as Bootstrap, UIkit, Font Awesome, etc.)  
used inside Joomla components built with Joomla Component Builder (JCB).  

They are part of the **media system** — loaded dynamically via Joomla's asset manager into:

- **Site Views**
- **Custom Admin Views**
- **Templates**
- **Layouts**

You define how the library behaves, where its files come from (local/CDN), and when they should load.  
JCB takes care of all the boilerplate required for correct Joomla asset registration — per Joomla version.

---
MD;

		// Why Use JCB Libraries?
		$readme[] = '### Why Use Libraries in JCB?';
		$readme[] = <<<MD
With JCB Libraries, you can:

- Automatically inject JS/CSS files into views/templates/layouts
- Avoid manually writing Joomla's asset inclusion logic
- Set **smart load conditions** (always, only once, etc.)
- Choose between **local file copies** or **CDN URLs**
- Package and version-control libraries across multiple components

This system removes the burden of asset management, so you can focus on functionality.

---
MD;

		// How to use and manage
		$readme[] = '### How Do Libraries Integrate into JCB?';
		$readme[] = <<<MD
From the JCB GUI, navigate to the **Libraries** area to manage inclusion logic and files.

To import libraries from this repository:

1. Click **Init** in the Libraries section
2. Select the repository you want to pull from
3. Choose one or more libraries to import

Once imported, you can:

- **Link a library** to a layout, template, or view
- **Set inclusion strategy** (e.g. "always include", "only in layout")
- **Reset** a library to refresh from this repository
- **Push** updates back if you have write access (or use a fork)

Each library entry defines how its files are bundled, loaded, and reused across JCB.

---
MD;

		$readme[] = '### Customization & Repository Support';
		$readme[] = <<<MD
Libraries are version-controlled and support the full Git workflow.

You can:

- Fork this repository and point your JCB instance to your fork
- Use your own CDN URLs or host files locally via JCB's download system
- Push contributions or improvements using Pull Requests

This gives you **full control and flexibility** over how your frontend libraries are included in your Joomla components.

---
MD;

		$readme[] = '### Index of JCB Libraries';
		$readme[] = '';

		// Index of available libraries
		$readme[] = $this->getIndex($items);
		$readme[] = '';

		$readme[] = <<<MD
### All used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")
MD;

		return implode("\n", $readme);
	}
}

