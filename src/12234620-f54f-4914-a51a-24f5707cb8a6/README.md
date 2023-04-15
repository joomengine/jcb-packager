```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Load (Details)
> namespace: **VDM\Joomla\Componentbuilder\Package\Database**
```uml
@startuml
class Load  #Gold {
  # Table $table
  # Database $load
  + __construct(?Table $table = null, ?Database $load = null)
  + value(int $id, string $field, ...) : mixed
  + item(int $id, ?string $table) : ?object
  + items(array $ids, string $table) : ?array
}

note right of Load::__construct
  Constructor

  since: 3.2.0
end note

note right of Load::value
  Get a value from a given table
Example: $this->value(23, 'value_key', 'table_name');

  since: 3.2.0
  return: mixed
  
  arguments:
    int $id
    string $field
    string $table
end note

note right of Load::item
  Get values from a given table
Example: $this->item(23, 'table_name');

  since: 3.2.0
  return: ?object
end note

note right of Load::items
  Get values from a given table
Example: $this->items($ids, 'table_name');

  since: 3.2.0
  return: ?array
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

