```
███████╗██╗   ██╗██████╗ ███████╗██████╗
██╔════╝██║   ██║██╔══██╗██╔════╝██╔══██╗
███████╗██║   ██║██████╔╝█████╗  ██████╔╝
╚════██║██║   ██║██╔═══╝ ██╔══╝  ██╔══██╗
███████║╚██████╔╝██║     ███████╗██║  ██║
╚══════╝ ╚═════╝ ╚═╝     ╚══════╝╚═╝  ╚═╝
██████╗  ██████╗ ██╗    ██╗███████╗██████╗ ███████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗██╔════╝
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝███████╗
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗╚════██║
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║███████║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝╚══════╝
```

### What is JCB Super Powers?
The Joomla Component Builder (JCB) Super Power features are designed to enhance JCB's functionality and streamline the development process. These Super Powers enable developers to efficiently manage and share their custom powers across multiple JCB instances through repositories hosted on [https://git.vdm.dev/[username]/[repository-name]](https://git.vdm.dev). JCB Super Powers are managed using a combination of layers, events, tasks, methods, switches, and algorithms, which work together to provide powerful customization and extensibility options. More details on JCB Super Powers can be found in the [Super Powers Documentation](https://git.vdm.dev/joomla/super-powers/wiki).

In summary, JCB Super Powers offer a flexible and efficient way to manage and share functionalities between JCB instances. By utilizing a sophisticated system of layers, events, tasks, methods, switches, and algorithms, developers can seamlessly integrate JCB core powers and their custom powers. For more information on how to work with JCB Super Powers, refer to the [Super Powers User Guide](https://git.vdm.dev/joomla/super-powers/wiki).

### What can I find here?
This repository contains an index (see below) of all the approved powers within the JCB GUI. During the compilation of a component, these powers are automatically added to the repository, ensuring a well-organized and accessible collection of functionalities.

# Index of powers

- **Namespace**: [VDM\Joomla\Componentbuilder\Package](#vdm-joomla-componentbuilder-package)

  - **abstract class Factory** | [Details](src/ec804df5-a384-48d7-b709-ae091ddc328a) | [Code](src/ec804df5-a384-48d7-b709-ae091ddc328a/code.php) | [Settings](src/ec804df5-a384-48d7-b709-ae091ddc328a/settings.json) | Factory
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Database](#vdm-joomla-componentbuilder-package-database)

  - **class Insert** | [Details](src/f68aafc4-beec-4bf0-b528-4e2c525f5b7b) | [Code](src/f68aafc4-beec-4bf0-b528-4e2c525f5b7b/code.php) | [Settings](src/f68aafc4-beec-4bf0-b528-4e2c525f5b7b/settings.json) | Insert
  - **class Load** | [Details](src/12234620-f54f-4914-a51a-24f5707cb8a6) | [Code](src/12234620-f54f-4914-a51a-24f5707cb8a6/code.php) | [Settings](src/12234620-f54f-4914-a51a-24f5707cb8a6/settings.json) | Load
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Display](#vdm-joomla-componentbuilder-package-display)

  - **class Details** | [Details](src/2e64007d-acac-438c-b719-3e1875784f47) | [Code](src/2e64007d-acac-438c-b719-3e1875784f47/code.php) | [Settings](src/2e64007d-acac-438c-b719-3e1875784f47/settings.json) | Details
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Service](#vdm-joomla-componentbuilder-package-service)

  - **class Database** | [Details](src/97c8b20c-a35d-47e7-b801-b9c54443e876) | [Code](src/97c8b20c-a35d-47e7-b801-b9c54443e876/code.php) | [Settings](src/97c8b20c-a35d-47e7-b801-b9c54443e876/settings.json) | Database
  - **class Display** | [Details](src/7d1aeda3-2598-46a6-bec2-7d4c5a65d99c) | [Code](src/7d1aeda3-2598-46a6-bec2-7d4c5a65d99c/code.php) | [Settings](src/7d1aeda3-2598-46a6-bec2-7d4c5a65d99c/settings.json) | Display

# Class Diagrams

## VDM Joomla Componentbuilder Package
> namespace VDM\Joomla\Componentbuilder\Package
```uml
@startuml

namespace VDM\Joomla\Componentbuilder\Package #Olive {


  abstract Factory  #Orange {
    # static $container
    + {static} _() : Mixed
    + {static} getContainer() : Container
    # {static} createContainer() : Container
  }
}


@enduml
```

## VDM Joomla Componentbuilder Package Database
> namespace VDM\Joomla\Componentbuilder\Package\Database
```uml
@startuml

namespace VDM\Joomla\Componentbuilder\Package\Database #LightGreen {


  class Insert  #Gold {
    # Config $config
    # Table $table
    # Model $model
    # \JDatabaseDriver $db
    + __construct()
    + value() : bool
    + item() : bool
    + items() : bool
  }

  class Load  #Gold {
    # Table $table
    # Database $load
    + __construct()
    + value() : mixed
    + item() : ?object
    + items() : ?array
  }
}


@enduml
```

## VDM Joomla Componentbuilder Package Display
> namespace VDM\Joomla\Componentbuilder\Package\Display
```uml
@startuml

namespace VDM\Joomla\Componentbuilder\Package\Display #LightGreen {


  class Details  #Gold {
    - array $owner
    + owner() : string
    + hasOwner() : bool
    + components() : string
    - getInfoValue() : ?string
    - hasKey() : bool
  }
}


@enduml
```

## VDM Joomla Componentbuilder Package Service
> namespace VDM\Joomla\Componentbuilder\Package\Service
```uml
@startuml

namespace VDM\Joomla\Componentbuilder\Package\Service #LightGreen {


  class Database  #Gold {
    + register() : void
    + getLoad() : Load
    + getInsert() : Insert
    + getDatabaseLoad() : LoadDatabase
    + getDatabaseInsert() : InsertDatabase
  }

  class Display  #Gold {
    + register() : void
    + getDetails() : Details
  }
}


@enduml
```


---
```
     ██╗ ██████╗  ██████╗ ███╗   ███╗██╗      █████╗
     ██║██╔═══██╗██╔═══██╗████╗ ████║██║     ██╔══██╗
     ██║██║   ██║██║   ██║██╔████╔██║██║     ███████║
██   ██║██║   ██║██║   ██║██║╚██╔╝██║██║     ██╔══██║
╚█████╔╝╚██████╔╝╚██████╔╝██║ ╚═╝ ██║███████╗██║  ██║
 ╚════╝  ╚═════╝  ╚═════╝ ╚═╝     ╚═╝╚══════╝╚═╝  ╚═╝
 ██████╗ ██████╗ ███╗   ███╗██████╗  ██████╗ ███╗   ██╗███████╗███╗   ██╗████████╗
██╔════╝██╔═══██╗████╗ ████║██╔══██╗██╔═══██╗████╗  ██║██╔════╝████╗  ██║╚══██╔══╝
██║     ██║   ██║██╔████╔██║██████╔╝██║   ██║██╔██╗ ██║█████╗  ██╔██╗ ██║   ██║
██║     ██║   ██║██║╚██╔╝██║██╔═══╝ ██║   ██║██║╚██╗██║██╔══╝  ██║╚██╗██║   ██║
╚██████╗╚██████╔╝██║ ╚═╝ ██║██║     ╚██████╔╝██║ ╚████║███████╗██║ ╚████║   ██║
 ╚═════╝ ╚═════╝ ╚═╝     ╚═╝╚═╝      ╚═════╝ ╚═╝  ╚═══╝╚══════╝╚═╝  ╚═══╝   ╚═╝
██████╗ ██╗   ██╗██╗██╗     ██████╗ ███████╗██████╗
██╔══██╗██║   ██║██║██║     ██╔══██╗██╔════╝██╔══██╗
██████╔╝██║   ██║██║██║     ██║  ██║█████╗  ██████╔╝
██╔══██╗██║   ██║██║██║     ██║  ██║██╔══╝  ██╔══██╗
██████╔╝╚██████╔╝██║███████╗██████╔╝███████╗██║  ██║
╚═════╝  ╚═════╝ ╚═╝╚══════╝╚═════╝ ╚══════╝╚═╝  ╚═╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

