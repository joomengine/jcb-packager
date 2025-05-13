```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface TableInterface (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power\Interfaces**
> extends: **ExtendingTableInterface**

```uml
@startuml
interface TableInterface  #Lavender {
  + linked(string $table) : array
  + dependencies(string $entity) : array
  + search(string $table, string $area) : array
}

note right of TableInterface::linked
  Get all linked fields of an area/view/table

  since: 5.2.1
  return: array
end note

note right of TableInterface::dependencies
  Get all incoming link dependencies pointing to the given entity.
This method returns a map of `$entity` field keys to an array of referencing tables and fields.

  since: 5.2.1
  return: array
end note

note right of TableInterface::search
  Loops over the $table fields and builds a new array
that hold all the fields to be searched in a specific area of JCB

  since: 5.2.1
  return: array
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---1a977217_0bb6_44e9_a201_6b4f8478e5b1---Power
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

