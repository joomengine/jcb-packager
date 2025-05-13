```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Set (Details)
> namespace: **VDM\Joomla\Componentbuilder\Package\Remote**
> extends: **ExtendingSet**

```uml
@startuml
class Set  #Gold {
  # updateItem(object $item, object $existing, ...) : bool
  # createItem(object $item, object $repo) : bool
  # updateItemReadme(object $item, object $existing, ...) : void
  # createItemReadme(object $item, object $repo) : void
}

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
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---f1ba7387_0e93_489d_934f_530caf3bdc83---Power
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

