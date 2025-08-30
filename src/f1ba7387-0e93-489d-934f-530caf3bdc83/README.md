### JCB! Power
# class Set (Details)
> namespace: **VDM\Joomla\Componentbuilder\Remote**
> extends: **ExtendingSet**

```uml
@startuml

class Set  #Gold {
  + __construct(Tracker $tracker, Messages $messages, ...)
  # updateItem(object $item, object $existing, ...) : bool
  # createItem(object $item, object $repo) : bool
  # updateItemReadme(object $item, object $existing, ...) : void
  # createItemReadme(object $item, object $repo) : void
  # dependenciesEqual(?object $obj1, ?object $obj2) : bool
}

note right of Set::__construct
  Constructor.

  since: 5.1.1
  
  arguments:
    Tracker $tracker
    Messages $messages
    Grep $grep
    Resolver $resolver
    Config $config
    ItemReadme $itemreadme
    MainReadme $mainreadme
    Git $git
    Items $items
    array $repos
    ?string $table = null
    ?string $settingsName = null
    ?string $indexPath = null
end note

note right of Set::updateItem
  update an existing item (if changed)

  since: 5.0.3
  return: bool
  
  arguments:
    object $item
    object $existing
    object $repo
end note

note right of Set::createItem
  create a new item

  since: 5.0.3
  return: bool
end note

note right of Set::updateItemReadme
  update an existing item readme

  since: 5.0.3
  return: void
  
  arguments:
    object $item
    object $existing
    object $repo
end note

note right of Set::createItemReadme
  create a new item readme

  since: 5.0.3
  return: void
end note

note right of Set::dependenciesEqual
  Checks if two objects' @dependencies arrays are equal by comparing their values.
This method ensures that each dependency object (key-value-entity-table structure)
is present in both arrays, regardless of order. It treats dependencies as sets,
meaning order is not significant, but exact match of all key-value pairs is required.

  since: 5.0.2
  return: bool
end note

@enduml
```

The **Power** feature in JCB allows you to write PHP classes and their implementations,
making it easy to include them in your Joomla project. JCB handles linking, autoloading,
namespacing, and folder structure creation for you.

By using the **SPK** (Super Power Key) in your custom code (replacing the class name
in your code with the SPK), JCB will automatically pull the Power from the repository
into your project. This makes it available in your JCB instance, allowing you to edit
and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in
namespacing to prevent collisions and improve reusability across different JCB systems.

You can also set the **JCB powers path** globally or per component under the
**Dynamic Integration** tab, providing flexibility and maintainability.

To add this specific Power to your project in JCB:

> Simply use this SPK:
```
Super---f1ba7387_0e93_489d_934f_530caf3bdc83---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")