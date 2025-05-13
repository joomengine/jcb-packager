```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Resolver (Details)
> namespace: **VDM\Joomla\Componentbuilder\Package\Dependency**

```uml
@startuml
class Resolver << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Tracker $tracker
  # Table $table
  # array $linked
  # array $dependencies
  # array $code
  # array $placeholders
  + __construct(Config $config, Tracker $tracker, ...)
  + extract(object $item) : void
  # setTableLinkedFields() : void
  # setTableDependencies() : void
  # setTableSearch() : void
  # setAliasMap() : void
  # extractLinkedFields(object $item) : void
  # extractDependencies(object $item) : void
  # extractDynamicContent(object $item) : void
  - processCustomCode(string $value) : void
  - processTemplates(string $value) : void
  - processLayouts(string $value) : void
  - processPlaceholders(string $value) : void
  - getCustomCode(string $value) : array
  - getTemplates(string $value) : array
  - getLayouts(string $value) : array
  - getPlaceholders(string $value) : array
  - normalizeToStringArray(mixed $raw) : array
  - normalizeToSubformArray(string $fieldPath, object $item) : array
  - collectSubformValues(mixed $data, array $path) : array
  - record(string $target, string $entity, ...) : void
}

note right of Resolver::__construct
  Constructor.

  since: 5.2.1
  
  arguments:
    Config $config
    Tracker $tracker
    Table $table
end note

note left of Resolver::extract
  Inspect an item and extract all the dependencies
This method inspects the item and loads all dependencies

  since: 5.2.1
  return: void
end note

note right of Resolver::setTableLinkedFields
  Set all the linked fields of this table

  since: 5.2.1
  return: void
end note

note left of Resolver::setTableDependencies
  Set all the dependencies of this table

  since: 5.2.1
  return: void
end note

note right of Resolver::setTableSearch
  Set all the related table search fields

  since: 5.2.1
  return: void
end note

note left of Resolver::setAliasMap
  Load all alias and GUID's of template and layout tables

  since: 5.2.1
  return: void
end note

note right of Resolver::extractLinkedFields
  Inspects all fields with outgoing links (type 1) and records their dependencies.
Handles both plain fields and sub-form paths (denoted by “|”).  Any value
encountered is normalised to one-dimensional strings before recording.

  since: 5.2.1
  return: void
end note

note left of Resolver::extractDependencies
  Extracts entities that depend on this item (incoming links)

  since: 5.2.1
  return: void
end note

note right of Resolver::extractDynamicContent
  Inspects all fields for dynamic linking content.

  since: 5.2.1
  return: void
end note

note left of Resolver::processCustomCode
  Process custom code function references from value.

  since: 5.2.1
  return: void
end note

note right of Resolver::processTemplates
  Process template usages from value.

  since: 5.2.1
  return: void
end note

note left of Resolver::processLayouts
  Process layout references from value.

  since: 5.2.1
  return: void
end note

note right of Resolver::processPlaceholders
  Process placeholder targets from value.

  since: 5.2.1
  return: void
end note

note left of Resolver::getCustomCode
  Extracts custom code function names from a string value.
Handles both direct names and numeric IDs, including parsing
'+'-delimited forms where only the first token is used.

  since: 5.2.1
  return: array
end note

note right of Resolver::getTemplates
  Extracts template names (GUIDs) from a string value.

  since: 5.2.1
  return: array
end note

note left of Resolver::getLayouts
  Extracts layout names (GUIDs) from a string value.

  since: 5.2.1
  return: array
end note

note right of Resolver::getPlaceholders
  Extracts placeholders from a string value.

  since: 5.2.1
  return: array
end note

note left of Resolver::normalizeToStringArray
  Normalizes a raw field value into an array of strings.
Accepts strings, arrays of strings, or Traversable of strings. Any invalid or
non-scalar values are excluded.

  since: 5.2.1
  return: array
end note

note right of Resolver::normalizeToSubformArray
  Traverses an arbitrarily nested sub-form path and returns every value
found as a clean string array.
Example field path: "contacts|0|address|street".
• "contacts" is the root field on <code>$item</code> (holds the sub-form rows).
• Intermediate numeric parts are row indexes; non-numeric parts are keys.

  since: 5.2.1
  return: array
end note

note left of Resolver::collectSubformValues
  Recursively digs through the sub-form structure to harvest raw leaf values.

  since: 5.2.1
  return: array
end note

note right of Resolver::record
  Records a  child/parent in the tracker.

  since: 5.2.1
  return: void
  
  arguments:
    string $target
    string $entity
    string $value
    string $table
    string $key
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---d325341e_4ba9_45f3_a944_3919adca5570---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

