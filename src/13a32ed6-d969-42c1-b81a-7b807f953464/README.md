```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Table (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power**
> extends: **ExtendingTable**

```uml
@startuml
class Table << (F,LightGreen) >> #RoyalBlue {
  + linked(string $table) : array
  + dependencies(string $entity) : array
  + search(string $table, string $area) : array
  - traverseSubformLinkedFields(string $name, array $fields, ...) : void
  - traverseSubformDependencies(string $table, string $name, ...) : void
  - isSubformField(array $field) : bool
  - isValidLinkedField(array $field) : bool
  - isValidDependencyField(?array $link, string $entity) : bool
}

note right of Table::linked
  Get all linked fields of an area/view/table

  since: 5.2.1
  return: array
end note

note left of Table::dependencies
  Get all incoming link dependencies pointing to the given entity.
This method returns a map of `$entity` field keys to an array of referencing tables and fields.

  since: 5.2.1
  return: array
end note

note right of Table::search
  Loops over the $table fields and builds a new array
that hold all the fields to be searched in a specific area of JCB

  since: 5.1.0
  return: array
end note

note left of Table::traverseSubformLinkedFields
  Recursively traverses subform fields to collect valid linked fields

  since: 5.2.1
  return: void
  
  arguments:
    string $name
    array $fields
    $linked
end note

note right of Table::traverseSubformDependencies
  Recursively traverses subform fields to collect valid dependencies

  since: 5.2.1
  return: void
  
  arguments:
    string $table
    string $name
    array $fields
    string $entity
    $result
end note

note left of Table::isSubformField
  Validates that the given field represents a well-formed subform.

  since: 5.2.1
  return: bool
end note

note right of Table::isValidLinkedField
  Validates that the given field represents a well-formed outgoing link.

  since: 5.2.1
  return: bool
end note

note left of Table::isValidDependencyField
  Validates that the provided link config represents a valid dependency on the given entity.

  since: 5.2.1
  return: bool
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---13a32ed6_d969_42c1_b81a_7b807f953464---Power
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

