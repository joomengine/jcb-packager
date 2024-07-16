```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Details (Details)
> namespace: **VDM\Joomla\Componentbuilder\Package\Display**

```uml
@startuml
class Details  #Gold {
  - array $owner
  + owner(array $info, bool $trust = false) : string
  + hasOwner(array $info) : bool
  + components(array $info) : string
  - getInfoValue(string $key, array $info) : ?string
  - hasKey(array $info) : bool
}

note right of Details::owner
  get the JCB package owner details display

  since: 3.2.0
  return: string
end note

note right of Details::hasOwner
  Check if info details has owner values set

  since: 3.2.0
  return: bool
end note

note right of Details::components
  get the JCB package components details display

  since: 3.2.0
  return: string
end note

note right of Details::getInfoValue
  get the value from INFO array

  since: 3.2.0
  return: ?string
end note

note right of Details::hasKey
  Check if the JCB package has a key

  since: 3.2.0
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
Super---2e64007d_acac_438c_b719_3e1875784f47---Power
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

