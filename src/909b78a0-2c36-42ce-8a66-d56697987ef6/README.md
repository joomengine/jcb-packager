```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Grep (Details)
> namespace: **VDM\Joomla\Componentbuilder\Snippet**
> extends: **ExtendingGrep**

```uml
@startuml
class Grep << (F,LightGreen) >> #RoyalBlue {
  # ?string $target
  # array $order
  # searchRemote(string $guid) : ?object
  # getRemote(object $path, string $guid) : ?object
  # setRemoteIndexMessage(string $message, string $path, ...) : void
}

note right of Grep::searchRemote
  Search for a remote item

  since: 5.1.1
  return: ?object
end note

note right of Grep::getRemote
  Get a remote joomla power

  since: 5.1.1
  return: ?object
end note

note right of Grep::setRemoteIndexMessage
  Set repository messages and errors based on given conditions.

  since: 5.1.1
  return: void
  
  arguments:
    string $message
    string $path
    string $repository
    string $organisation
    ?string $base
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---909b78a0_2c36_42ce_8a66_d56697987ef6---Power
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

