### JCB! Power
# abstract class GetContent (Details)
> namespace: **VDM\Joomla\Componentbuilder\Package\Remote**
> extends: **Get**

```uml
@startuml

abstract GetContent  #Orange {
  # Normalize $normalize
  + __construct(Config $config, Grep $grep, ...)
  + init(array $items, ?object $repo = null, ...) : array
  + reset(array $items) : bool
  + item(string $guid, array $order = ['remote', 'local'], ...) : bool
  # extractItemValue(array|object $item, string $key) : mixed|null
  # {abstract} isLocal(string $fullPath) : bool
  # {abstract} store(string $content, string $fullPath) : bool
}

note right of GetContent::__construct
  Constructor.

  since: 5.1.1
  
  arguments:
    Config $config
    Grep $grep
    Item $item
    Normalize $normalize
    Tracker $tracker
    MessageBus $messages
    ?string $table = null
end note

note right of GetContent::init
  Initializes and categorizes items by checking their existence in the local file system
and optionally retrieving them from a remote repository if not found locally.
This method processes an array of $items and checks each item:
- If found in the local file system: categorized under 'local'.
- If not found locally and not available remotely: categorized under 'not_found'.
- If retrieved from the remote repository: categorized under 'added' and stored locally.
local: array<string, string>,
not_found: array<string, string>,
added: array<string, string>
} Associative arrays indexed by GUIDs indicating the status of each item:
- 'local': Items already present in the local database.
- 'not_found': Items not found locally or remotely.
- 'added': Items successfully retrieved from the remote repository and stored.

  since: 5.1.1
  return: array
  
  arguments:
    array $items
    ?object $repo = null
    bool $force = false
end note

note right of GetContent::reset
  Reset the items

  since: 3.2.0
  return: bool
end note

note right of GetContent::item
  Load an item using its GUID from the given repository or across all repositories.

  since: 3.2.0
  return: bool
  
  arguments:
    string $guid
    array $order = ['remote', 'local']
    ?object $repo = null
end note

note right of GetContent::extractItemValue
  Extract a value from an array or object safely.

  since: 5.1.2
  return: mixed|null
end note

note right of GetContent::isLocal
  Check if an content is found locally

  since: 5.1.1
  return: bool
end note

note right of GetContent::store
  Store the found content locally

  since: 5.1.1
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
Super---aa50e254_ca08_4767_a165_83a9244e2f9d---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")