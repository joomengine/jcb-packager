```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Set (Details)
> namespace: **VDM\Joomla\Componentbuilder\Package\Remote\CustomCode**
> extends: **ExtendingSet**

```uml
@startuml
class Set << (F,LightGreen) >> #RoyalBlue {
  # Load $load
  + __construct(Load $load, Config $config, ...)
  # index_map_IndexName(object $item) : ?string
  # index_map_ShortDescription(object $item) : ?string
  # index_map_IndexGUID(object $item) : string
}

note right of Set::__construct
  Constructor.

  since: 5.2.1
  
  arguments:
    Load $load
    Config $config
    Grep $grep
    Items $items
    ItemReadme $itemReadme
    MainReadme $mainReadme
    Git $git
    MessageBus $messages
    array $repos
    ?string $table = null
    ?string $settingsPath = null
    ?string $indexPath = null
end note

note right of Set::index_map_IndexName
  Get the item name for the index values

  since: 5.2.1
  return: ?string
end note

note right of Set::index_map_ShortDescription
  Get the item Short Description for the index values

  since: 5.2.1
  return: ?string
end note

note right of Set::index_map_IndexGUID
  Get the item GUID for the index values

  since: 5.2.1
  return: string
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---babbb8b2_d67b_449f_8d01_a4fb20d1ddb1---Power
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

