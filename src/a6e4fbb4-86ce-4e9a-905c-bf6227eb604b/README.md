### JCB! Power
# class Component (Details)
> namespace: **VDM\Joomla\Componentbuilder\Package\Service**

```uml
@startuml

class Component  #Gold {
  + register(Container $container) : void
  + getGrep(Container $container) : Grep
  + getRemoteConfig(Container $container) : Config
  + getResolver(Container $container) : Resolver
  + getRemoteGet(Container $container) : Get
  + getRemoteSet(Container $container) : Set
  + getItemReadme(Container $container) : ItemReadme
  + getMainReadme(Container $container) : MainReadme
  + getComponentAdminViewsGrep(Container $container) : Grep
  + getComponentAdminViewsRemoteConfig(Container $container) : ComponentAdminViews
  + getComponentAdminViewsResolver(Container $container) : Resolver
  + getComponentAdminViewsRemoteGet(Container $container) : Get
  + getComponentAdminViewsRemoteSet(Container $container) : Set
  + getComponentCustomAdminViewsGrep(Container $container) : Grep
  + getComponentCustomAdminViewsRemoteConfig(Container $container) : ComponentCustomAdminViews
  + getComponentCustomAdminViewsResolver(Container $container) : Resolver
  + getComponentCustomAdminViewsRemoteGet(Container $container) : Get
  + getComponentCustomAdminViewsRemoteSet(Container $container) : Set
  + getComponentSiteViewsGrep(Container $container) : Grep
  + getComponentSiteViewsRemoteConfig(Container $container) : ComponentSiteViews
  + getComponentSiteViewsResolver(Container $container) : Resolver
  + getComponentSiteViewsRemoteGet(Container $container) : Get
  + getComponentSiteViewsRemoteSet(Container $container) : Set
  + getComponentRouterGrep(Container $container) : Grep
  + getComponentRouterRemoteConfig(Container $container) : ComponentRouter
  + getComponentRouterResolver(Container $container) : Resolver
  + getComponentRouterRemoteGet(Container $container) : Get
  + getComponentRouterRemoteSet(Container $container) : Set
  + getComponentConfigGrep(Container $container) : Grep
  + getComponentConfigRemoteConfig(Container $container) : ComponentConfig
  + getComponentConfigResolver(Container $container) : Resolver
  + getComponentConfigRemoteGet(Container $container) : Get
  + getComponentConfigRemoteSet(Container $container) : Set
  + getComponentPlaceholdersGrep(Container $container) : Grep
  + getComponentPlaceholdersRemoteConfig(Container $container) : ComponentPlaceholders
  + getComponentPlaceholdersResolver(Container $container) : Resolver
  + getComponentPlaceholdersRemoteGet(Container $container) : Get
  + getComponentPlaceholdersRemoteSet(Container $container) : Set
  + getComponentUpdatesGrep(Container $container) : Grep
  + getComponentUpdatesRemoteConfig(Container $container) : ComponentUpdates
  + getComponentUpdatesResolver(Container $container) : Resolver
  + getComponentUpdatesRemoteGet(Container $container) : Get
  + getComponentUpdatesRemoteSet(Container $container) : Set
  + getComponentFilesFoldersGrep(Container $container) : Grep
  + getComponentFilesFoldersRemoteConfig(Container $container) : ComponentFilesFolders
  + getComponentFilesFoldersResolver(Container $container) : Resolver
  + getComponentFilesFoldersRemoteGet(Container $container) : Get
  + getComponentFilesFoldersRemoteSet(Container $container) : Set
  + getComponentCustomAdminMenusGrep(Container $container) : Grep
  + getComponentCustomAdminMenusRemoteConfig(Container $container) : ComponentCustomAdminMenus
  + getComponentCustomAdminMenusResolver(Container $container) : Resolver
  + getComponentCustomAdminMenusRemoteGet(Container $container) : Get
  + getComponentCustomAdminMenusRemoteSet(Container $container) : Set
  + getComponentDashboardGrep(Container $container) : Grep
  + getComponentDashboardRemoteConfig(Container $container) : ComponentDashboard
  + getComponentDashboardResolver(Container $container) : Resolver
  + getComponentDashboardRemoteGet(Container $container) : Get
  + getComponentDashboardRemoteSet(Container $container) : Set
  + getComponentModulesGrep(Container $container) : Grep
  + getComponentModulesRemoteConfig(Container $container) : ComponentModules
  + getComponentModulesResolver(Container $container) : Resolver
  + getComponentModulesRemoteGet(Container $container) : Get
  + getComponentModulesRemoteSet(Container $container) : Set
  + getComponentPluginsGrep(Container $container) : Grep
  + getComponentPluginsRemoteConfig(Container $container) : ComponentPlugins
  + getComponentPluginsResolver(Container $container) : Resolver
  + getComponentPluginsRemoteGet(Container $container) : Get
  + getComponentPluginsRemoteSet(Container $container) : Set
}

note right of Component::register
  Registers the service provider with a DI container.

  since: 5.1.1
  return: void
end note

note left of Component::getGrep
  Get The Grep Class.

  since: 5.1.1
  return: Grep
end note

note right of Component::getRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: Config
end note

note left of Component::getResolver
  Get The Resolver Class.

  since: 5.1.1
  return: Resolver
end note

note right of Component::getRemoteGet
  Get The Remote Get Class.

  since: 5.1.1
  return: Get
end note

note left of Component::getRemoteSet
  Get The Remote Set Class.

  since: 5.1.1
  return: Set
end note

note right of Component::getItemReadme
  Get The Item Class.

  since: 5.1.1
  return: ItemReadme
end note

note left of Component::getMainReadme
  Get The Main Class.

  since: 5.1.1
  return: MainReadme
end note

note right of Component::getComponentAdminViewsGrep
  Get The Grep Class.

  since: 5.1.1
  return: Grep
end note

note left of Component::getComponentAdminViewsRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: ComponentAdminViews
end note

note right of Component::getComponentAdminViewsResolver
  Get The Resolver Class.

  since: 5.1.1
  return: Resolver
end note

note left of Component::getComponentAdminViewsRemoteGet
  Get The Remote Get Class.

  since: 5.1.1
  return: Get
end note

note right of Component::getComponentAdminViewsRemoteSet
  Get The Remote Set Class.

  since: 5.1.1
  return: Set
end note

note left of Component::getComponentCustomAdminViewsGrep
  Get The Grep Class.

  since: 5.1.1
  return: Grep
end note

note right of Component::getComponentCustomAdminViewsRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: ComponentCustomAdminViews
end note

note left of Component::getComponentCustomAdminViewsResolver
  Get The Resolver Class.

  since: 5.1.1
  return: Resolver
end note

note right of Component::getComponentCustomAdminViewsRemoteGet
  Get The Remote Get Class.

  since: 5.1.1
  return: Get
end note

note left of Component::getComponentCustomAdminViewsRemoteSet
  Get The Remote Set Class.

  since: 5.1.1
  return: Set
end note

note right of Component::getComponentSiteViewsGrep
  Get The Grep Class.

  since: 5.1.1
  return: Grep
end note

note left of Component::getComponentSiteViewsRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: ComponentSiteViews
end note

note right of Component::getComponentSiteViewsResolver
  Get The Resolver Class.

  since: 5.1.1
  return: Resolver
end note

note left of Component::getComponentSiteViewsRemoteGet
  Get The Remote Get Class.

  since: 5.1.1
  return: Get
end note

note right of Component::getComponentSiteViewsRemoteSet
  Get The Remote Set Class.

  since: 5.1.1
  return: Set
end note

note left of Component::getComponentRouterGrep
  Get The Grep Class.

  since: 5.1.1
  return: Grep
end note

note right of Component::getComponentRouterRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: ComponentRouter
end note

note left of Component::getComponentRouterResolver
  Get The Resolver Class.

  since: 5.1.1
  return: Resolver
end note

note right of Component::getComponentRouterRemoteGet
  Get The Remote Get Class.

  since: 5.1.1
  return: Get
end note

note left of Component::getComponentRouterRemoteSet
  Get The Remote Set Class.

  since: 5.1.1
  return: Set
end note

note right of Component::getComponentConfigGrep
  Get The Grep Class.

  since: 5.1.1
  return: Grep
end note

note left of Component::getComponentConfigRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: ComponentConfig
end note

note right of Component::getComponentConfigResolver
  Get The Resolver Class.

  since: 5.1.1
  return: Resolver
end note

note left of Component::getComponentConfigRemoteGet
  Get The Remote Get Class.

  since: 5.1.1
  return: Get
end note

note right of Component::getComponentConfigRemoteSet
  Get The Remote Set Class.

  since: 5.1.1
  return: Set
end note

note left of Component::getComponentPlaceholdersGrep
  Get The Grep Class.

  since: 5.1.1
  return: Grep
end note

note right of Component::getComponentPlaceholdersRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: ComponentPlaceholders
end note

note left of Component::getComponentPlaceholdersResolver
  Get The Resolver Class.

  since: 5.1.1
  return: Resolver
end note

note right of Component::getComponentPlaceholdersRemoteGet
  Get The Remote Get Class.

  since: 5.1.1
  return: Get
end note

note left of Component::getComponentPlaceholdersRemoteSet
  Get The Remote Set Class.

  since: 5.1.1
  return: Set
end note

note right of Component::getComponentUpdatesGrep
  Get The Grep Class.

  since: 5.1.1
  return: Grep
end note

note left of Component::getComponentUpdatesRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: ComponentUpdates
end note

note right of Component::getComponentUpdatesResolver
  Get The Resolver Class.

  since: 5.1.1
  return: Resolver
end note

note left of Component::getComponentUpdatesRemoteGet
  Get The Remote Get Class.

  since: 5.1.1
  return: Get
end note

note right of Component::getComponentUpdatesRemoteSet
  Get The Remote Set Class.

  since: 5.1.1
  return: Set
end note

note left of Component::getComponentFilesFoldersGrep
  Get The Grep Class.

  since: 5.1.1
  return: Grep
end note

note right of Component::getComponentFilesFoldersRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: ComponentFilesFolders
end note

note left of Component::getComponentFilesFoldersResolver
  Get The Resolver Class.

  since: 5.1.1
  return: Resolver
end note

note right of Component::getComponentFilesFoldersRemoteGet
  Get The Remote Get Class.

  since: 5.1.1
  return: Get
end note

note left of Component::getComponentFilesFoldersRemoteSet
  Get The Remote Set Class.

  since: 5.1.1
  return: Set
end note

note right of Component::getComponentCustomAdminMenusGrep
  Get The Grep Class.

  since: 5.1.1
  return: Grep
end note

note left of Component::getComponentCustomAdminMenusRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: ComponentCustomAdminMenus
end note

note right of Component::getComponentCustomAdminMenusResolver
  Get The Resolver Class.

  since: 5.1.1
  return: Resolver
end note

note left of Component::getComponentCustomAdminMenusRemoteGet
  Get The Remote Get Class.

  since: 5.1.1
  return: Get
end note

note right of Component::getComponentCustomAdminMenusRemoteSet
  Get The Remote Set Class.

  since: 5.1.1
  return: Set
end note

note left of Component::getComponentDashboardGrep
  Get The Grep Class.

  since: 5.1.1
  return: Grep
end note

note right of Component::getComponentDashboardRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: ComponentDashboard
end note

note left of Component::getComponentDashboardResolver
  Get The Resolver Class.

  since: 5.1.1
  return: Resolver
end note

note right of Component::getComponentDashboardRemoteGet
  Get The Remote Get Class.

  since: 5.1.1
  return: Get
end note

note left of Component::getComponentDashboardRemoteSet
  Get The Remote Set Class.

  since: 5.1.1
  return: Set
end note

note right of Component::getComponentModulesGrep
  Get The Grep Class.

  since: 5.1.1
  return: Grep
end note

note left of Component::getComponentModulesRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: ComponentModules
end note

note right of Component::getComponentModulesResolver
  Get The Resolver Class.

  since: 5.1.1
  return: Resolver
end note

note left of Component::getComponentModulesRemoteGet
  Get The Remote Get Class.

  since: 5.1.1
  return: Get
end note

note right of Component::getComponentModulesRemoteSet
  Get The Remote Set Class.

  since: 5.1.1
  return: Set
end note

note left of Component::getComponentPluginsGrep
  Get The Grep Class.

  since: 5.1.1
  return: Grep
end note

note right of Component::getComponentPluginsRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: ComponentPlugins
end note

note left of Component::getComponentPluginsResolver
  Get The Resolver Class.

  since: 5.1.1
  return: Resolver
end note

note right of Component::getComponentPluginsRemoteGet
  Get The Remote Get Class.

  since: 5.1.1
  return: Get
end note

note left of Component::getComponentPluginsRemoteSet
  Get The Remote Set Class.

  since: 5.1.1
  return: Set
end note

@enduml
```

The **Power** feature in JCB allows you to write PHP classes and their implementations,
making it easy to include them in your Joomla project. JCB handles linking, autoloading,
namespacing, and folder structure creation for you.

By using the **SPK** (Super Power Key) in your custom code (replacing the class name
in your code with the SPK), JCB will automatically pull the Power from the repository
into your project. This makes it available in your JCB instance, allowing you to edit
and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in
namespacing to prevent collisions and improve reusability across different JCB systems.

You can also set the **JCB powers path** globally or per component under the
**Dynamic Integration** tab, providing flexibility and maintainability.

To add this specific Power to your project in JCB:

> Simply use this SPK:
```
Super---a6e4fbb4_86ce_4e9a_905c_bf6227eb604b---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")