```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Config (Details)
> namespace: **VDM\Joomla\Componentbuilder\Snippet**
> extends: **ComponentConfig**

```uml
@startuml
class Config  #Gold {
  # JoomlaRegistry $config
  + __construct(?Input $input = null, ?JoomlaRegistry $params = null, ...)
  # getGiteausername() : ?string
  # getGiteatoken() : ?string
  # getSnippetcoreorganisation() : string
  # getSnippetinitrepos() : array
  # getApprovedjoomlapaths() : array
}

note right of Config::__construct
  Constructor

  since: 5.1.1
  
  arguments:
    ?Input $input = null
    ?JoomlaRegistry $params = null
    ?JoomlaRegistry $config = null
end note

note right of Config::getGiteausername
  get Gitea Username

  since: 5.1.1
  return: ?string
end note

note right of Config::getGiteatoken
  get Gitea Access Token

  since: 5.1.1
  return: ?string
end note

note right of Config::getSnippetcoreorganisation
  Get snippet core organisation

  since: 5.1.1
  return: string
end note

note right of Config::getSnippetinitrepos
  Get Snippet init repos

  since: 5.1.1
  return: array
end note

note right of Config::getApprovedjoomlapaths
  Get joomla snippet approved paths

  since: 5.1.1
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
Super---cc072717_33bd_433c_9a82_d47fcab286ac---Power
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

