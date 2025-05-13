```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class AdminView (Details)
> namespace: **VDM\Joomla\Componentbuilder\Package\Service**

```uml
@startuml
class AdminView  #Gold {
  + register(Container $container) : void
  + getGrep(Container $container) : Grep
  + getRemoteConfig(Container $container) : Config
  + getResolver(Container $container) : Resolver
  + getRemoteGet(Container $container) : Get
  + getRemoteSet(Container $container) : Set
  + getItemReadme(Container $container) : ItemReadme
  + getMainReadme(Container $container) : MainReadme
}

note right of AdminView::register
  Registers the service provider with a DI container.

  since: 5.2.1
  return: void
end note

note left of AdminView::getGrep
  Get The Grep Class.

  since: 5.2.1
  return: Grep
end note

note right of AdminView::getRemoteConfig
  Get The Remote Config Class.

  since: 5.2.1
  return: Config
end note

note left of AdminView::getResolver
  Get The Resolver Class.

  since: 5.2.1
  return: Resolver
end note

note right of AdminView::getRemoteGet
  Get The Remote Get Class.

  since: 5.2.1
  return: Get
end note

note left of AdminView::getRemoteSet
  Get The Remote Set Class.

  since: 5.2.1
  return: Set
end note

note right of AdminView::getItemReadme
  Get The Item Class.

  since: 5.2.1
  return: ItemReadme
end note

note left of AdminView::getMainReadme
  Get The Main Class.

  since: 5.2.1
  return: MainReadme
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---22ff81e2_3f0f_4049_842c_622202c8e687---Power
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

