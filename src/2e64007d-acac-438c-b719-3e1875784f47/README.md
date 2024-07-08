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
> extends: ****
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

