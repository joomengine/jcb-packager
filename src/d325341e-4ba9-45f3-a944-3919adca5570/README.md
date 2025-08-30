### JCB! Power
# final class Resolver (Details)
> namespace: **VDM\Joomla\Componentbuilder\Package\Dependency**

```uml
@startuml

class Resolver << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Normalize $normalize
  # Tracker $tracker
  # Table $table
  # Load $load
  # Items $items
  # array $parents
  # array $children
  # array $code
  # array $files
  # bool $hasFiles
  # array $folders
  # bool $hasFolders
  # array $placeholders
  # array $dependencies
  + __construct(Config $config, Normalize $normalize, ...)
  + table(string $table) : self
  + extract(object $item) : ?array
  # getDependencies() : ?array
  # extractParents(object $item) : void
  # extractChildren(object $item) : void
  # extractDynamicContent(object $item) : void
  # extractSubformFields(object $item) : void
  # extractFiles(object $item) : void
  # extractFolders(object $item) : void
  # extractCustomCode(string $value) : void
  # extractTemplates(string $value) : void
  # extractLayouts(string $value) : void
  # extractPlaceholders(string $value) : void
  # getCustomCode(string $value) : array
  # getTemplates(string $value) : array
  # getLayouts(string $value) : array
  # getPlaceholders(string $value) : array
  # normalizeToStringArray(mixed $raw) : array
  # normalizeToSubformArray(string $fieldPath, object $item) : array
  # collectSubformValues(mixed $data, array $path) : array
  # record(string $target, string $entity, ...) : void
  # recordFile(string $filePath, string $target) : void
  # recordFolder(string $folderPath, string $target) : void
  # vaildDirectChild(string $entity, string $value, ...) : bool
  # validValue(string $value, string $key) : bool
  # {static} validGuid(string $guid) : bool
  - init() : void
  - setEntityParents() : void
  - setEntityChildren() : void
  - setEntitySearchAreas() : void
  - setEntityFiles() : void
  - setEntityFolders() : void
  - setAliasMap() : void
  - setGuid(int $id, string $table) : string
  - getTable() : string
}

note right of Resolver::__construct
  Constructor.

  since: 5.1.1
  
  arguments:
    Config $config
    Normalize $normalize
    Tracker $tracker
    Table $table
    Load $load
    Items $items
end note

note left of Resolver::table
  Set the current active table

  since: 5.1.2
  return: self
end note

note right of Resolver::extract
  Inspect an item and extract all the dependencies
This method inspects the item and loads all dependencies

  since: 5.1.1
  return: ?array
end note

note left of Resolver::getDependencies
  Return the relationships/dependencies of this given item object
These relationships are used internally and are not part of the database schema.
They are returned under the special '@dependencies' key to avoid accidental persistence.

  since: 5.1.1
  return: ?array
end note

note right of Resolver::extractParents
  Inspects all fields with outgoing links (type 1) and records their dependencies.
Handles both plain fields and sub-form paths (denoted by “|”).  Any value
encountered is normalised to one-dimensional strings before recording.

  since: 5.1.1
  return: void
end note

note left of Resolver::extractChildren
  Extracts entities that depend on this item (incoming links)

  since: 5.1.1
  return: void
end note

note right of Resolver::extractDynamicContent
  Inspects all fields for dynamic linking content.

  since: 5.1.1
  return: void
end note

note left of Resolver::extractSubformFields
  Extract subform field dependencies from an item.
This method checks if the item is a subform field and, if so,
extracts the referenced field GUIDs from its XML definition.
Each valid field reference is recorded as a parent dependency.

  since: 5.1.1
  return: void
end note

note right of Resolver::extractFiles
  Extract files from entity
This method checks if the item has files, if so,
extracts the files from the entity based on the config details.

  since: 5.1.1
  return: void
end note

note left of Resolver::extractFolders
  Extract folders from entity
This method checks if the item has folders, if so,
extracts the folders from the entity based on the config details.

  since: 5.1.1
  return: void
end note

note right of Resolver::extractCustomCode
  Process custom code function references from value.

  since: 5.1.1
  return: void
end note

note left of Resolver::extractTemplates
  Process template usages from value.

  since: 5.1.1
  return: void
end note

note right of Resolver::extractLayouts
  Process layout references from value.

  since: 5.1.1
  return: void
end note

note left of Resolver::extractPlaceholders
  Process placeholder targets from value.

  since: 5.1.1
  return: void
end note

note right of Resolver::getCustomCode
  Extracts custom code function names from a string value.
Handles both direct names and numeric IDs, including parsing
'+'-delimited forms where only the first token is used.

  since: 5.1.1
  return: array
end note

note left of Resolver::getTemplates
  Extracts template names (GUIDs) from a string value.

  since: 5.1.1
  return: array
end note

note right of Resolver::getLayouts
  Extracts layout names (GUIDs) from a string value.

  since: 5.1.1
  return: array
end note

note left of Resolver::getPlaceholders
  Extracts placeholders from a string value.

  since: 5.1.1
  return: array
end note

note right of Resolver::normalizeToStringArray
  Normalizes a raw field value into an array of strings.
Accepts strings, arrays of strings, or Traversable of strings. Any invalid or
non-scalar values are excluded.

  since: 5.1.1
  return: array
end note

note left of Resolver::normalizeToSubformArray
  Traverses an arbitrarily nested sub-form path and returns every value
found as a clean string array.
Example field path: "contacts|0|address|street".
• "contacts" is the root field on <code>$item</code> (holds the sub-form rows).
• Intermediate numeric parts are row indexes; non-numeric parts are keys.

  since: 5.1.1
  return: array
end note

note right of Resolver::collectSubformValues
  Recursively digs through the sub-form structure to harvest raw leaf values.

  since: 5.1.1
  return: array
end note

note left of Resolver::record
  Records a  child/parent in the tracker.

  since: 5.1.1
  return: void
  
  arguments:
    string $target
    string $entity
    string $value
    string $table
    string $key
end note

note right of Resolver::recordFile
  Records a file in the tracker.

  since: 5.1.1
  return: void
end note

note left of Resolver::recordFolder
  Records a folder in the tracker.

  since: 5.1.1
  return: void
end note

note right of Resolver::vaildDirectChild
  Check if this is a valid direct child dependencies

  since: 5.1.1
  return: bool
  
  arguments:
    string $entity
    string $value
    string $table
    string $key
end note

note left of Resolver::validValue
  Check if the given value is a valid entity key value.

  since: 5.1.1
  return: bool
end note

note right of Resolver::validGuid
  Validate the Globally Unique Identifier

  since: 5.1.1
  return: bool
end note

note left of Resolver::init
  Initialize the resolver

  since: 5.1.1
  return: void
end note

note right of Resolver::setEntityParents
  Set all the linked fields (parents) of this table

  since: 5.1.1
  return: void
end note

note left of Resolver::setEntityChildren
  Set all the dependencies (children) of this entity

  since: 5.1.1
  return: void
end note

note right of Resolver::setEntitySearchAreas
  Set all the related table search fields

  since: 5.1.1
  return: void
end note

note left of Resolver::setEntityFiles
  Set all the related table files field names

  since: 5.1.1
  return: void
end note

note right of Resolver::setEntityFolders
  Set all the related table folders field names

  since: 5.1.1
  return: void
end note

note left of Resolver::setAliasMap
  Load all alias and GUID's of template and layout tables

  since: 5.1.1
  return: void
end note

note right of Resolver::setGuid
  Set GUID for an item.

  since: 5.1.2
  return: string
end note

note left of Resolver::getTable
  Get the current active table

  since: 5.1.2
  return: string
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
Super---d325341e_4ba9_45f3_a944_3919adca5570---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")