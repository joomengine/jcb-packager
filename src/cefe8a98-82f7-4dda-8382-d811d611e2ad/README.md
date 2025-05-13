```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Package (Details)
> namespace: **VDM\Joomla\Componentbuilder\Package\Service**

```uml
@startuml
class Package  #Gold {
  + register(Container $container) : void
  + getPowerTable(Container $container) : Table
  + getConfig(Container $container) : Config
  + getPowerTracker(Container $container) : Tracker
  + getMessageBus(Container $container) : MessageBus
}

note right of Package::register
  Registers the service provider with a DI container.

  since: 5.2.1
  return: void
end note

note right of Package::getPowerTable
  Get The Power Table Class.

  since: 5.2.1
  return: Table
end note

note right of Package::getConfig
  Get The Config Class.

  since: 5.2.1
  return: Config
end note

note right of Package::getPowerTracker
  Get The Tracker Class.

  since: 5.2.1
  return: Tracker
end note

note right of Package::getMessageBus
  Get The Message Bus Class.

  since: 5.2.1
  return: MessageBus
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---cefe8a98_82f7_4dda_8382_d811d611e2ad---Power
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

